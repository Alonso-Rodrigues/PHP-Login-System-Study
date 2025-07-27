<?php
session_start();
$isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/home.css">
  <link rel="stylesheet" href="/assets/css/geral.css">
  <title>Home</title>
</head>

<body>
  <header class="menu_container">
    <nav class="menu_items">
      <ul>
        <li><a href="./">Home</a></li>
        <li><a href="/articles">Articles</a></li>
        <li><a href="/register">Register</a></li>
      </ul>
      
      <?php if ($isLoggedIn): ?>
        <button class="logout-button">
          <a href="/logout">
            Log out
          </a>
        </button>
      <?php else: ?>
        <button>
          <a href="/login">
            Login
          </a>
        </button>
      <?php endif; ?>
    </nav>
  </header>

  <main>
    <section class="principal">
      <h1>
        Login System
      </h1>
        <?php if ($isLoggedIn): ?>
          <p>Welcome back, 
          <?php echo htmlspecialchars($_SESSION['email']); ?>!</p>
        <?php endif; ?>
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
