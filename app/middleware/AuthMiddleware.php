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

    public static function requireRole($role) {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== $role) {
            header('Location: /home?error=unauthorized');
            exit();
        }
    }

    public static function requireRoles(array $roles) {
        if (!isset($_SESSION['role']) || !in_array($_SESSION['role'], $roles)) {
            header('Location: /home?error=unauthorized');
            exit();
        }
    }
}
