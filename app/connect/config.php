<?php

try{
  
  $connect = new PDO("mysql:host=localhost;dbname=login_system;charset=utf8", "root", "");
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error){
   echo 'ERROR: ' . $error->getMessage();
}

?>
