
<?php include __DIR__ . '/../views/partials/header.php'; ?>
<?php include __DIR__ . '/../views/partials/menu.php'; ?>

<main>
    <section class="container-edit">
        <h2>Edit User</h2>
        <form method="POST" class="container-form-group">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" 
                       value="<?= htmlspecialchars($user['name']) ?>" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" 
                       value="<?= htmlspecialchars($user['email']) ?>" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-save">Save</button>
                <a href="/home" class="btn btn-cancel">Cancel</a>
            </div>
        </form>
    </section>
</main>

<?php include __DIR__ . '/../views/partials/footer.php'; ?>
