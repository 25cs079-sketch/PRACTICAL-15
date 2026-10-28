<?php
session_start();
require 'db.php';
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $conn->real_escape_string($_POST['student_id']);
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM students WHERE student_id='$student_id' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['student_id'] = $row['student_id'];
        $_SESSION['name'] = $row['name'];
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid ID or Password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Portal Login</title>
    <style>
        body { font-family: Arial; background-color: #f2f2f2; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        form { background-color: white; padding: 30px; width: 300px; border-radius: 10px; box-shadow: 0 0 10px gray; }
        h1 { text-align: center; margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input { width: 100%; padding: 10px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 5px; }
        button { width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        .error { color: red; text-align: center; margin-bottom: 10px; }
    </style>
</head>
<body>
    <form method="POST" action="">
        <h1>Student Portal</h1>
        <?php if($error) echo "<div class='error'>$error</div>"; ?>
        <label>Student ID</label>
        <input type="text" name="student_id" placeholder="Enter Student ID" required>
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter Password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>