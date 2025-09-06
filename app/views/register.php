<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="../assets/css/register.css">
  <link rel="stylesheet" href="/assets/css/menu.css"> 
  <link rel="stylesheet" href="/assets/css/geral.css">
</head>

<body>
  <?php include_once __DIR__ . '/partials/menu.php'; ?>
  <main>
    <section>
      <form action="/register" method="POST">
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
  </main>
  <?php include __DIR__ . '/partials/footer.php'; ?>
</body>

</html>