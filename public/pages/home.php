<?php
session_start();
$isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/geral.css">
  <link rel="stylesheet" href="/assets/css/home.css">
  <link rel="stylesheet" href="/assets/css/menu.css"> 
  <title>Home</title>
</head>

<body>
<?php include_once __DIR__ . '/../../app/includes/menu.php'; ?>
  <main>
    <section class="container-welcome">
      <section class="welcome-user">
          <h1>
            Login System
          </h1>
          <?php if ($isLoggedIn): ?>
          <p>Welcome back, 
            <?php 
              if (isset($_SESSION['user_name'])) {
                  echo htmlspecialchars($_SESSION['user_name']);
              } else {
                  echo 'User'; 
              }
            ?>
          </p>
        <?php endif; ?>
      </section>
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
