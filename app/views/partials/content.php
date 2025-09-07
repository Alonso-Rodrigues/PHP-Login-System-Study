<main>
  <section class="container-welcome">
    <section class="welcome-user">
        <h1>Login System</h1>
        <?php if ($isLoggedIn): ?>
          <p>Welcome back, 
            <?php 
              if (isset($_SESSION['user_name'])) {
                  echo ucfirst(htmlspecialchars($_SESSION['user_name']));
              } else {
                  echo 'User'; 
              }
            ?>
          </p>
        <?php else: ?>
          <p>Please log in to access the system features.</p>
        <?php endif; ?>
    </section>
    <?php include __DIR__ . '/usersTable.php'; ?>
  </section>
</main>
