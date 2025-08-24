<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: /app/pages/login.php');
    exit();
}

if (!isset($_GET['id'])) {
    header('Location: /app/pages/home.php');
    exit();
}

$userId = (int)$_GET['id'];

try {
    require_once __DIR__ . '/../connect/config.php';
    
    $stmt = $connect->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute([$userId]);
    
} catch (PDOException $e) {
}

header('Location: /app/pages/home.php');
exit();
?>