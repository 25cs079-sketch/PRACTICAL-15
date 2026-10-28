<?php
session_start();
if (!isset($_SESSION['student_id'])) { header("Location: index.php"); exit(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Information</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f2f2f2;
            font-family: Arial;
        }
        /* Grid */
        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        .grid div {
            padding: 12px;
            border: 1px solid #ccc;
        }
        /* Flexbox */
        .flex {
            display: flex;
            justify-content: space-between;
            padding: 12px;
            margin: 5px 0;
            border: 1px solid #ccc;
            background: white;
        }
        /* Responsive */
        @media (max-width: 600px) {
            .grid {
                grid-template-columns: 1fr;
            }
            .flex {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
<div class="container my-5">
    <div class="card shadow">
        <h2 class="text-center bg-primary text-white p-3">
            Contact Information
        </h2>
        <div class="card-body">
            <!-- CSS Grid -->
            <h4>CSS Grid</h4>
            <div class="grid">
                <div><b>Student Name</b></div>
                <div>Shrey Patel</div>
                <div><b>Email</b></div>
                <div>shrey@gmail.com</div>

                <div><b>Phone</b></div>
                <div>9876543210</div>
                <div><b>College</b></div>
                <div>ABC College of Computer Science</div>
                <div><b>College Email</b></div>
                <div>info@abccollege.edu</div>
                <div><b>College Contact</b></div>
                <div>079-12345678</div>
            </div>
            <hr>
            <!-- Flexbox -->
            <h4>Flexbox</h4>
            <div class="flex"><b>Student Name</b><span>Shrey Patel</span></div>
            <div class="flex"><b>Email</b><span>shrey@gmail.com</span></div>
            <div class="flex"><b>Phone</b><span>9876543210</span></div>
            <hr>
            <!-- Bootstrap -->
            <h4>Bootstrap</h4>
            <table class="table table-bordered table-striped">
                <tr><th>Student Name</th><td>Shrey Patel</td></tr>
                <tr><th>Email</th><td>shrey@gmail.com</td></tr>
                <tr><th>Phone</th><td>9876543210</td></tr>
                <tr><th>College</th><td>ABC College of Computer Science</td></tr>
                <tr><th>College Email</th><td>info@abccollege.edu</td></tr>
                <tr><th>College Contact</th><td>079-12345678</td></tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>
