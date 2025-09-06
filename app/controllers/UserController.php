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
}
