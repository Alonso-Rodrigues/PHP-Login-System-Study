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
  case "ARTICLES":
    require_once "pages/articles.php";
    break;
  case "REGISTER":
    require_once "pages/register.php";
    break;
  case "LOGIN":
    require_once "pages/login.php";
    break;
  default:
    require_once "pages/home.php";
}
?>