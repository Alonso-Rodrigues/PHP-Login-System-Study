<?php
class AuthMiddleware {
    public static function requireLogin() {
        if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
            header('Location: /login');
            exit();
        }
    }

    public static function guestOnly() {
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            header('Location: /home');
            exit();
        }
    }
}
