<?php
require_once __DIR__ . '/../models/User.php';

class UserController {
    private $userModel;

    public function __construct($db) {
        $this->userModel = new User($db);
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);

            $user = $this->userModel->findByEmail($email);

            if ($user && password_verify($password, $user['password'])) {
                session_regenerate_id(true);
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['logged_in'] = true;

                header('Location: /home');
                exit;
            } else {
                header('Location: /login?error=invalid');
                exit;
            }
        }
        require_once __DIR__ . '/../views/login.php';
    }

    public function home() {
        $isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;

        $users = [];
        if ($isLoggedIn) {
            $users = $this->userModel->getAllUsers();
        }

        $pageTitle = "Home";
        require __DIR__ . '/../views/home.php';
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header('Location: /home');
        exit;
    }

    public function register() {
    $pageTitle = "Register";
    $error = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if (empty($name) || empty($email) || empty($password)) {
            $error = "All fields are required!";
        } elseif ($this->userModel->findByEmail($email)) {
            $error = "Email already registered!";
        } else {
            if ($this->userModel->create($name, $email, $password)) {
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                header("Location: /home?success=registered");
            } else {
                header("Location: /login?success=registered");
            }
            exit();
            } else {
                $error = "Error creating user.";
            }
        }
    }

    require_once __DIR__ . '/../views/register.php';
    }

    public function edit($id) {
        if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
            header('Location: /login');
            exit();
        }

        $user = $this->userModel->getById($id);

        if (!$user) {
            header('Location: /home?error=user_not_found');
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);

            if (!empty($name) && !empty($email)) {
                $this->userModel->update($id, $name, $email);
                header('Location: /home?success=updated');
                exit();
            }
        }
        require __DIR__ . '/../views/editUser.php';
    }

    public function delete($id) {
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        header('Location: /login');
        exit();
    }

    if ($this->userModel->delete($id)) {
        header('Location: /home?success=deleted');
    } else {
        header('Location: /home?error=delete_failed');
    }
    exit();
    }

}
