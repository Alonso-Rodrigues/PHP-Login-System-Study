<?php include __DIR__ . '/../views/partials/header.php'; ?>
<?php include __DIR__ . '/../views/partials/menu.php'; ?>

<section class="container-user-profile">
    <section class="user-profile">
        <h1>User Profile</h1>
        <p>ID:<?= htmlspecialchars($user['id']); ?></p>
        <p>Name:<?= htmlspecialchars($user['name']); ?></p>
        <p>Email:<?= htmlspecialchars($user['email']); ?></p>
        <p>Role:<?= htmlspecialchars($user['role']); ?></p>

        <div class="user-photo">
            <?php if (!empty($user['photo'])): ?>
                <img src="<?= htmlspecialchars($user['photo']); ?>" alt="User Photo" title="User Photo">
            <?php else: ?>
                <p>No photo uploaded</p>
            <?php endif; ?>
        </div>

        <form method="POST" enctype="multipart/form-data" class="form-photo-upload">
            <label for="input-photo" class="custom-file-upload">New Photo</label>
            <input type="file" name="photo" id="input-photo" required>
            <button type="submit" id="btn-photo-upload">Upload</button>
        </form>
    </section>
</section>

<?php include __DIR__ . '/../views/partials/footer.php'; ?>
