<?php
session_start();
$isLoggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;


$users = [];
$totalUsers = 0;
if ($isLoggedIn) {
    require_once __DIR__ . '/../../app/actions/getUsersData.php';
    $users = getAllUsers();

}
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
      <?php if ($isLoggedIn): ?>
        <section class="list-users">
          <h2>User list</h2>
          <table class="table-users">
            <thead>
              <tr>
                <th>#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
              </tr>
            </thead>
            <tbody>
                <?php if (!empty($users)): ?>
                  <?php $contador = 1; ?>
                  <?php foreach ($users as $user): ?>
                    <tr>
                      <td><?php echo $contador++; ?></td>
                      <td><?php echo htmlspecialchars($user['id']); ?></td>
                      <td><?php echo htmlspecialchars($user['name']); ?></td>
                      <td><?php echo htmlspecialchars($user['email']); ?></td>
                      <td>••••••••</td>
                    </tr>
                  <?php endforeach; ?>
                  <?php else: ?>
                    <tr>
                        <td colspan="5" style="text-align: center;">No users found</td>
                    </tr>
                <?php endif; ?>
              </tbody>
          </table>              
        </section>
      <?php endif; ?>
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
