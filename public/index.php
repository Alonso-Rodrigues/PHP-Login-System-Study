<?php
$url = strtoupper($_GET['url'] ?? 'HOME');

// Process login
if ($url === 'LOGINPROCESS' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once __DIR__ . '/../app/actions/loginProcess.php';
    exit;
}

// Process logout
if ($url === 'LOGOUT') {
    require_once __DIR__ . '/../app/actions/logout.php';
    exit;
}

switch ($url) {
  case "REGISTER":
    require_once __DIR__ . '/../app/views/register.php';
    break;
  case "LOGIN":
    require_once __DIR__ . '/../app/views/login.php';
    break;
  case "HOME":
    require_once __DIR__ . '/../app/views/home.php';
    break;
  case "EDITUSER":
    require_once __DIR__ . '/../app/actions/editUser.php';
    break;
  case "DELETEUSER":
    require_once __DIR__ . '/../app/actions/deleteUser.php';
    break;
  default:
    require_once __DIR__ . '/../app/views/home.php';
}