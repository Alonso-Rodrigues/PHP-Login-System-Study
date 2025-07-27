<?php
$isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>
<header class="menu_container">
  <nav class="menu_items">
    <ul>
      <li><a href="/">Home</a></li>
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