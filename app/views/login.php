<?php include __DIR__ . '/../views/partials/header.php'; ?>
<?php include __DIR__ . '/../views/partials/menu.php'; ?>

<section class="container-login">
  <form action="/loginprocess" method="POST" class="container-login-form">
    <h1>Login</h1>
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <button type="submit" name="submit">Send</button>
  </form>
</section>

<?php include __DIR__ . '/../views/partials/footer.php'; ?>