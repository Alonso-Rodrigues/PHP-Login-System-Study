<?php
$isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>

<script src="/assets/js/main.js" defer></script>
<header class="menu-container">
  <nav id="nav-container" class="menu-items">

    <button id="btn-mobile">Menu
      <span id="hamburger"></span>
    </button>

    <ul id="nav-list">
      <li><a href="/">Home</a></li>
      <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
        <li><a href="/register">Register</a></li>
      <?php endif; ?>

      <?php if ($isLoggedIn): ?>
        <li>
          <a href="/logout" class="logout-button">Log out</a>
        </li>
      <?php else: ?>
        <li>
          <a href="/login" class="login-button">Login</a>
        </li>
      <?php endif; ?>
    </ul>

  </nav>
</header>
