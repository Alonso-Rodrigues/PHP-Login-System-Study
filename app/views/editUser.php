<?php include __DIR__ . '/../views/partials/header.php'; ?>
<?php include __DIR__ . '/../views/partials/menu.php'; ?>

<section class="container-edit">
    <form method="POST" class="container-form-edit">
        <h2>Edit User</h2>
        <div class="form-edit">
            <label>Name:</label>
            <input type="text" name="name" 
                    value="<?= htmlspecialchars($user['name']) ?>" required>
        </div>
        <div class="form-edit">
            <label>Email:</label>
            <input type="email" name="email" 
                    value="<?= htmlspecialchars($user['email']) ?>" required>
        </div>
        <div class="form-edit-btn">
            <button type="submit" class="btn-btn-save">Save</button>
            <a href="/home" class="btn-btn-cancel">Cancel</a>
        </div>
    </form>
</section>

<?php include __DIR__ . '/../views/partials/footer.php'; ?>
