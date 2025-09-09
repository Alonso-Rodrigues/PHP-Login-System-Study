<?php
$isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>
<header class="menu-container">
  <nav class="menu-items">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/register">Register</a></li>
    </ul>
    
    <?php if ($isLoggedIn): ?>
      <button class="logout-button">
        <a href="/logout">
          Log out
        </a>
      </button>

    <?php else: ?>
      <button class="login-button">
        <a href="/login">
          Login
        </a>
      </button>
    <?php endif; ?>

  </nav>
</header>