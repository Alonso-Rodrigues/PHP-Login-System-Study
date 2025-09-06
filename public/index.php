<?php
session_start();
require_once __DIR__ . '/../app/connect/config.php';
require_once __DIR__ . '/../app/controllers/UserController.php';

$url = strtolower($_GET['url'] ?? 'home');
$controller = new UserController($connect);

switch ($url) {
    case 'register':
        $controller->register();
        break;
    case 'login':
        $controller->login();
        break;
    case 'home':
        $controller->home();
        break;
    case 'logout':
        $controller->logout();
        break;
    default:
        $controller->home();
}
