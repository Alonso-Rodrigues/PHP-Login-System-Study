<?php
require_once __DIR__ . '/../connect/config.php';

function getAllUsers(){
  global $connect;

  try{
    $sql = "SELECT id, name, email, password FROM users ORDER BY id desc";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    error_log("Erro ao buscar usuários: " . $e->getMessage());
    return [];
  }
}