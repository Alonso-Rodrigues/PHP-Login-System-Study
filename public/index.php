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
    if (isset($_GET['id'])) {
        $controller->edit((int)$_GET['id']);
    } else {
        header('Location: /home');
        exit;
    }
    break;
    case 'deleteuser':
    $id = $_GET['id'] ?? null;
    if ($id) {
        $controller->delete((int)$id);
    } else {
        header('Location: /home?error=id_missing');
    }
    break;
}
