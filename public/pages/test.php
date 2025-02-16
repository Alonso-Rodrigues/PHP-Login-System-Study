<?php
// print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])){
  include_once('../connect/config.php');
  $email = $_POST['email'];
  $password = $_POST['password'];

  print_r('email: ' . $email);
  print_r('password: ' . $password);
}else{
  header('Location: login.php');
}
?>
