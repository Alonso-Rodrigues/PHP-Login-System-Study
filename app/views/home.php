<?php
session_start();
$isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;

$users = [];
$totalUsers = 0;
if ($isLoggedIn) {
    require_once __DIR__ . '/../../app/actions/getUsersData.php';
    $users = getAllUsers();
}

$pageTitle = "Home";
include __DIR__ . '/../../app/templates/header.php';
include __DIR__ . '/../../app/templates/menu.php';
?>

<main>
  <?php include __DIR__ . '/../../app/templates/content.php'; ?>
</main>

<?php include __DIR__ . '/../../app/templates/footer.php'; ?>
