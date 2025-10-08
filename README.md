# 📱 LoginPHP - User Management System
Complete authentication and user management system developed in pure PHP with MVC architecture.

## 🚀 Features
✅ Full authentication (Login/Logout/Register)
✅ Role system (Admin/User)
✅ User CRUD with pagination
✅ Profile photo upload with instant preview
✅ Individual profile editing
✅ User search and filters
✅ Responsive and modern interface
✅ Route protection with middleware
✅ Loading spinner for uploads

## 🛠️ Technologies Used
Backend: PHP 7.4+
Database: MySQL/MariaDB
Frontend: HTML5, CSS3, JavaScript (Vanilla)
Architecture: MVC (Model-View-Controller)
Security: PDO Prepared Statements, Sessions, Password Hashing

## ⚙️ Installation
Prerequisites

PHP 7.4 or higher
MySQL 5.7+ or MariaDB 10.2+
Apache with mod_rewrite enabled

## 👣 Step by Step
1. Clone the repository
git clone https://github.com/Alonso-Rodrigues/LoginPHP.git

2. Configure the database
Import the SQL file included in the project:
Using phpMyAdmin:

Access phpMyAdmin
Create a database called login_system
Select the database
Go to "Import" tab
Choose the database/database.sql file
Click "Execute"

3. Configure database connection
Edit app/connect/config.php with your credentials:
php$host = 'localhost';
$dbname = 'login_system';
$username = 'root';      // your username
$password = '';          // your password

4. Access the application
http://localhost/LoginPHP/public

## 🔐 Security Features
✅ Encrypted passwords with password_hash()
✅ SQL Injection protection (PDO Prepared Statements)
✅ Session validation
✅ Authentication middleware
✅ Route protection by role
✅ Input sanitization with htmlspecialchars()

## 🤝 Contributing
Contributions are welcome! Follow these steps:

Fork the project
Create a branch for your feature (git checkout -b feature/MyFeature)
Commit your changes (git commit -m 'feat: Add MyFeature')
Push to the branch (git push origin feature/MyFeature)
Open a Pull Request

Commit Pattern
We follow Conventional Commits:

feat: New feature
fix: Bug fix
docs: Documentation
style: Formatting
refactor: Code refactoring
test: Tests
chore: Maintenance

## 👨‍💻 Author
Alonso Rodrigues
GitHub: @Alonso-Rodrigues

## 🐛 Report Bugs
Found a bug? Open an issue detailing:

Problem description
Steps to reproduce
Expected behavior
Screenshots (if applicable)
