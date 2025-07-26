<?php
session_start();
require_once __DIR__ . '/../connect/config.php';

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $sql = "SELECT password FROM users WHERE email = :email";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            session_regenerate_id(true); 
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('Location: /articles');
            exit;

        } else {
            session_destroy();
            header('Location: /login');
            exit;
        }

    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {
    header('Location: /login');
    exit;
}

?>


