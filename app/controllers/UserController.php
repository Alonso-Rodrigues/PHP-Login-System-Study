<?php
require_once __DIR__ . '/../models/User.php';

class UserController {
    private $userModel;

    public function __construct($db) {
        $this->userModel = new User($db);
    }

    public function register() {
        require_once __DIR__ . '/../views/register.php';
    }

    public function login() {
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
        require_once __DIR__ . '/../actions/logout.php';
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
