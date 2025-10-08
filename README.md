# 📱 LoginPHP - User Management System
Complete authentication and user management system developed in pure PHP with MVC architecture.

## 🚀 Features
✅ Full authentication (Login/Logout/Register) <br>
✅ Role system (Admin/User) <br>
✅ User CRUD with pagination <br>
✅ Profile photo upload with instant preview <br>
✅ Individual profile editing <br>
✅ User search and filters <br>
✅ Responsive and modern interface <br>
✅ Route protection with middleware <br>
✅ Loading spinner for uploads <br>

## 🛠️ Technologies Used
Backend: PHP 7.4+ <br>
Database: MySQL/MariaDB <br>
Frontend: HTML5, CSS3, JavaScript (Vanilla) <br>
Architecture: MVC (Model-View-Controller) <br>
Security: PDO Prepared Statements, Sessions, Password Hashing <br>

## ⚙️ Installation
Prerequisites

PHP 7.4 or higher <br>
MySQL 5.7+ or MariaDB 10.2+ <br>
Apache with mod_rewrite enabled <br>

## 👣 Step by Step
1 - Clone the repository <br>
git clone https://github.com/Alonso-Rodrigues/LoginPHP.git <br>

2 - Configure the database <br>
Import the SQL file included in the project <br><br>
Using phpMyAdmin: <br>
Access phpMyAdmin <br>
Create a database called login_system <br>
Select the database <br>
Go to "Import" tab <br>
Choose the database/database.sql file <br>
Click "Execute" <br>

3 - Configure database connection <br>
Edit app/connect/config.php with your credentials: <br>
php$host = 'localhost'; <br>
$dbname = 'login_system'; <br>
$username = 'root';      // your username <br>
$password = '';          // your password <br>

4 - Access the application <br> <br>
http://localhost/LoginPHP/public <br> <br>

## 🔐 Security Features <br>
✅ Encrypted passwords with password_hash() <br>
✅ SQL Injection protection (PDO Prepared Statements) <br>
✅ Session validation <br>
✅ Authentication middleware <br>
✅ Route protection by role <br>
✅ Input sanitization with htmlspecialchars() <br>

## 🤝 Contributing <br>
Contributions are welcome! Follow these steps: <br>

Fork the project <br>
Create a branch for your feature (git checkout -b feature/MyFeature) <br>
Commit your changes (git commit -m 'feat: Add MyFeature') <br>
Push to the branch (git push origin feature/MyFeature) <br>
Open a Pull Request

Commit Pattern <br>
We follow Conventional Commits: <br>

feat: New feature <br>
fix: Bug fix <br>
docs: Documentation <br>
style: Formatting <br>
refactor: Code refactoring <br>
test: Tests <br>
chore: Maintenance <br>

## 👨‍💻 Author <br>
Alonso Rodrigues <br>
GitHub: @Alonso-Rodrigues <br>

## 🐛 Report Bugs <br>
Found a bug? Open an issue detailing: <br>

Problem description <br>
Steps to reproduce <br>
Expected behavior <br>
Screenshots (if applicable) <br>
 