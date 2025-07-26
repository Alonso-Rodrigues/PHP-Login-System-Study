<?php

$url = strtoupper($_GET['url'] ?? 'HOME');


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