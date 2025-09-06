<?php
$users = $users ?? [];
$isLoggedIn = $isLoggedIn ?? false;
?>

<?php if ($isLoggedIn): ?>
  <section class="list-users">
    <h2>User list</h2>

    <form action="" method="GET" class="search-form">
      <input type="text" name="search" placeholder="Search by name or email" 
             value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
      <button type="submit">🔎 Search</button>
    </form>

    <table class="table-users">
      <thead>
        <tr>
          <th>#</th>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Password</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $count = 1;
        $search = isset($_GET['search']) ? strtolower($_GET['search']) : '';

        $filteredUsers = array_filter($users, function ($user) use ($search) {
          return empty($search) || 
            strpos(strtolower($user['name']), $search) !== false || 
            strpos(strtolower($user['email']), $search) !== false;
        });
        ?>

        <?php if (!empty($filteredUsers)): ?>
          <?php foreach ($filteredUsers as $user): ?>
            <tr>
              <td><?php echo $count++; ?></td>
              <td><?php echo htmlspecialchars($user['id']); ?></td>
              <td><?php echo htmlspecialchars($user['name']); ?></td>
              <td><?php echo htmlspecialchars($user['email']); ?></td>
              <td>••••••••</td>
              <td class="action-buttons">
                <a href="/edituser?id=<?php echo $user['id']; ?>" class="btn btn-edit">✏️ Edit</a>
                <a href="/deleteuser?id=<?php echo $user['id']; ?>" 
                   class="btn btn-delete"
                   onclick="return confirm('Are you sure you want to delete <?php echo htmlspecialchars($user['name']); ?>?')">
                  🗑️ Delete
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="6" style="text-align: center;">No users found</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>              
  </section>
<?php endif; ?>
