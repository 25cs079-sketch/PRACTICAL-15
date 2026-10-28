<?php
session_start();
if (!isset($_SESSION['student_id'])) { header("Location: index.php"); exit(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Portal</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial; background-color: #f4f4f4; }
        nav { background-color: #1e293b; padding: 15px 20px; display: flex; justify-content: center; align-items: center; flex-wrap: wrap; gap: 15px; }
        nav a { color: white; text-decoration: none; font-size: 16px; font-weight: bold; padding: 8px 12px; border-radius: 5px; }
        nav a:hover { background-color: #007bff; }
        .content { text-align: center; padding: 50px; }
    </style>
</head>
<body>
    <nav>
        <a href="dashboard.php">Home</a>
        <a href="studentdetails.php">Student Details</a>
        <a href="fees.php">Fees</a>
        <a href="achievements.php">Achievements</a>
        <a href="address.php">Address</a>
        <a href="parentsdetails.php">Parents</a>
        <a href="contact.php">Contact</a>
        <a href="logout.php">Logout</a>
    </nav>
    <div class="content">
        <h1>Welcome, <?php echo $_SESSION['name']; ?>!</h1>
        <p>Select any option from the navigation bar.</p>
    </div>
</body>
</html>