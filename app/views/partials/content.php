<section class="container-welcome">
  <section class="welcome-user">
      <h1>
        Login System
      </h1>
      <?php if ($isLoggedIn): ?>
      <p>Welcome back, 
        <?php 
          if (isset($_SESSION['user_name'])) {
              echo ucfirst(htmlspecialchars($_SESSION['user_name']));
          } else {
              echo 'User'; 
          }
        ?>
      </p>
      <?php else: ?>
        <p>Please log in to access the system features.</p>
      <?php endif; ?>
  </section>
    <?php include_once __DIR__ . '/../../app/includes/usersTable.php'; ?>
</section>

LoginPHP/
├─ app/
│  ├─ actions/
│  │  ├─ deleteUser.php
│  │  ├─ editUser.php
│  │  ├─ getUsersData.php
│  │  ├─ loginProcess.php
│  │  └─ logout.php
│  ├─ connect/
│  │  └─ config.php
│  ├─ controllers/
│  ├─ models/
│  └─ views/
│     ├─ partials/
│     │  ├─ content.php
│     │  ├─ footer.php
│     │  ├─ header.php
│     │  ├─ menu.php
│     │  └─ usersTable.php
│     ├─ home.php
│     ├─ login.php
│     └─ register.php
└─ public/
   ├─ assets/
   │  ├─ css/
   │  │  ├─ edit.css
   │  │  ├─ geral.css
   │  │  ├─ home.css
   │  │  ├─ login.css
   │  │  ├─ menu.css
   │  │  └─ register.css
   │  ├─ img/
   │  └─ js/
   ├─ .htaccess
   └─ index.php
