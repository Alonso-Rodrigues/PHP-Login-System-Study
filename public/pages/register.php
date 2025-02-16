<?php 

if(isset($_POST['submit'])){
  print_r(($_POST['name']));
  print_r(($_POST['email']));
  print_r(($_POST['password']));
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