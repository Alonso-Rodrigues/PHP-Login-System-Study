<?php 
session_start();
require_once __DIR__ . '/../../app/connect/config.php';

if (isset($_POST['submit'])) {
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $password = $_POST['password'];

  if ($name && $email && $password) {
   
    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
    $stmt = $connect->prepare($sql);
    $stmt->execute([
      ':name' => $name,
      ':email' => $email,
      ':password' => $password
    ]);

  
    header('Location: /login');
    exit();
  } else {
    echo "Error";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="../assets/css/register.css">
</head>

<body>
  <main>
    <section>
      <form action="register.php" method="POST">
        <h1>Register Form</h1>
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
  </main>
</body>

</html>