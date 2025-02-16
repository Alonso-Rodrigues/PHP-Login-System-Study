  <?php
  session_start();
  require_once __DIR__ . '/connect/config.php';
  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/login.css">
  </head>

  <body>
    <main>
      <section>
        <div class="login">
          <h1>Login</h1>
          <input type="email" placeholder="email">
          <input type="password" placeholder="password">
          <button>Send</button>
        </div>
      </section>
    </main>
  </body>

  </html>