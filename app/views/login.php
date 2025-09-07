<?php include __DIR__ . '/../views/partials/header.php'; ?>
<?php include __DIR__ . '/../views/partials/menu.php'; ?>

<main>
  <section>
    <form action="/loginprocess" method="POST" class="login">
      <h1>Login</h1>
      <input type="email" name="email" placeholder="email">
      <input type="password" name="password" placeholder="password">
      <button type="submit" name="submit">Send</button>
    </form>
  </section>
</main>

<?php include __DIR__ . '/../views/partials/footer.php'; ?>