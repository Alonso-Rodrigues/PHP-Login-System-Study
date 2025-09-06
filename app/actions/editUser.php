<?php

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: /login.php');
    exit();
}

if (!isset($_GET['id'])) {
    header('Location: /home');
    exit();
}

$userId = (int)$_GET['id'];
$user = null;

try {
    require_once __DIR__ . '/../connect/config.php';
    
    $stmt = $connect->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$userId]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$user) {
        header('Location: /home');
        exit();
    }
} catch (PDOException $e) {
    header('Location: /home');
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    
    if (!empty($name) && !empty($email)) {
        try {
            $stmt = $connect->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
            $stmt->execute([$name, $email, $userId]);
            header('Location: /home');
            exit();
        } catch (PDOException $e) {
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="/assets/css/geral.css">
    <link rel="stylesheet" href="/assets/css/menu.css">
    <link rel="stylesheet" href="/assets/css/edit.css">
</head>

<body>
    <?php include __DIR__ . '../../views/partials/menu.php'; ?>
    <main>
        <section class="container-edit">
            <h2>Edit User</h2>
            <form method="POST" class="container-form-group">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required>
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-save">
                    Save
                </button>
                <a href="/app/pages/home.php" class="btn btn-cancel">
                    Cancel
                </a>
                </div>
            </form>
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