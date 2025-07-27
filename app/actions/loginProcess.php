<?php
session_start();
require_once __DIR__ . '/../connect/config.php';

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $sql = "SELECT id, name, email, password FROM users WHERE email = :email";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            session_regenerate_id(true); 
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['logged_in'] = true;

            header('Location: /articles');
            exit;

        } else {
            session_destroy();
            header('Location: /login?error=invalid');
            exit;
        }

    } catch (PDOException $e) {
        error_log("Erro: " . $e->getMessage());
        header('Location: /login?error=system');
        exit;
    }
} else {
    header('Location: /login?error=fields');
    exit;
}

?>


