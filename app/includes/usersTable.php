<?php if ($isLoggedIn): ?>
  <section class="list-users">
    <h2>User list</h2>
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
          <?php if (!empty($users)): ?>
            <?php $contador = 1; ?>
            <?php foreach ($users as $user): ?>
              <tr>
                <td><?php echo $contador++; ?></td>
                <td><?php echo htmlspecialchars($user['id']); ?></td>
                <td><?php echo htmlspecialchars($user['name']); ?></td>
                <td><?php echo htmlspecialchars($user['email']); ?></td>
                <td>••••••••</td>
                <td class="action-buttons">
                  <a href="/edituser?id=<?php echo $user['id']; ?>" class="btn btn-edit">
                    ✏️ Edit
                  </a>
                  <a href="/deleteuser?id=<?php echo $user['id']; ?>" class="btn btn-delete"
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