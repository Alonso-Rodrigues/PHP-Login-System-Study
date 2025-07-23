<?php
session_start();

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if (!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
    session_destroy(); 
    header('Location: login.php'); 
    exit; 
}

$login = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Articles</title>
  <link rel="stylesheet" href="../assets/css/geral.css">
  <link rel="stylesheet" href="../assets/css/articles.css">
</head>

<body>
  <header class="menu_container">
    <nav class="menu_items">
      <ul>
        <li><a href="../../home.php">Home</a></li>
        <li><a href="/public/pages/articles.php">Articles</a></li>
        <li><a href="/public/pages/register.php">Register</a></li>
      </ul>
      <button class="logout-button">
        <a href="/public/pages/logout.php">
          Log out
        </a>
      </button>
    </nav>
  </header>
  <main>
    <section class="principal">
      <h1>Welcome,
        <?php echo htmlspecialchars($login); ?>
      </h1>
    </section>
  </main>
  <footer>
    <div>
      <p>
        All rights reserved by Alonso's © Copyright 2025.
      </p>
    </div>
  </footer>
</body>

</html>