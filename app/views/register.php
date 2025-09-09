<?php include __DIR__ . '/../views/partials/header.php'; ?>
<?php include __DIR__ . '/../views/partials/menu.php'; ?>

<section class="container-regiter">
  <form action="/register" method="POST" class="form-regiter">
    <h1>Register Form</h1>
    <?php if (!empty($error)): ?>
      <div class="error">
        <?= htmlspecialchars($error) ?>
      </div>
    <?php endif; ?>
    <label for="name">Name</label>
    <input type="text" placeholder="Name" name="name" id="name" required>

    <label for="email">Email</label>
    <input type="email" placeholder="Email" name="email" id="email" required>

    <label for="password">Password</label>
    <input type="password" placeholder="Password" name="password" id="password" required>

    <div class="btn-form">
      <button type="submit" name="submit">Send</button>
      <button type="button">Cancel</button>
    </div>
  </form>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>  