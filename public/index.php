<?php
session_start();
require_once __DIR__ . '/../app/connect/config.php';
require_once __DIR__ . '/../app/controllers/UserController.php';

$url = strtolower($_GET['url'] ?? 'home');

$routes = [
    'login' => ['UserController', 'login'],
    'home' => ['UserController', 'home'],
    'register' => ['UserController', 'register'],
    'edituser' => ['UserController', 'edit'],
    'deleteuser' => ['UserController', 'delete'],
    'logout' => ['UserController', 'logout'],
];

if (isset($routes[$url])){
    [$controllerName, $method] = $routes[$url];
    $controller = new $controllerName($connect);

    if(in_array($method, ['edit', 'delete'])){
        $id = $_GET['id'] ?? null;
        if($id){
            $controller->$method((int)$id);
        } else {
            header('Location: /home?error=id_missing');
            exit;
        }
    } else {
        $controller->$method();
    }

}  else {
    (new UserController($connect))->home();
}