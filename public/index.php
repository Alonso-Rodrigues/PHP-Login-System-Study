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
    case 'loginprocess':
        require_once __DIR__ . '/../app/actions/loginProcess.php';
        exit;
    case 'home':
        $controller->home();
        break;
    case 'logout':
        $controller->logout();
        break;
    case 'edituser':         
        require_once __DIR__ . '/../app/actions/editUser.php';
        exit;
    case 'deleteuser':       
        require_once __DIR__ . '/../app/actions/deleteUser.php';
        exit;
    default:
        $controller->home();
}
