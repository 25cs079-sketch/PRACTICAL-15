<?php
session_start();
if (!isset($_SESSION['student_id'])) { header("Location: index.php"); exit(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f2f2f2;
            font-family: Arial;
        }
        /* CSS Grid */
        .grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
        }
        .grid div {
            padding: 12px;
            border: 1px solid #ccc;
            background: white;
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
            Achievements
        </h2>
        <div class="card-body">
            <!-- CSS Grid -->
            <h4>CSS Grid</h4>
            <div class="grid">
                <div>🏆 First Prize in Coding Competition</div>
                <div>🎖 Java Programming Certificate</div>
                <div>🏅 College Cricket Tournament Runner-up</div>
                <div>📜 Web Development Workshop Certificate</div>
                <div>⭐ Best Student Award - 2025</div>
            </div>
            <hr>

            <!-- Flexbox -->
            <h4>Flexbox</h4>
            <div class="flex">🏆 Coding Competition</div>
            <div class="flex">🎖 Java Certificate</div>
            <div class="flex">🏅 Cricket Tournament Runner-up</div>
            <hr>
            <!-- Bootstrap -->
            <h4>Bootstrap</h4>
            <ul class="list-group">
                <li class="list-group-item">🏆 First Prize in Coding Competition</li>
                <li class="list-group-item">🎖 Java Programming Certificate</li>
                <li class="list-group-item">🏅 College Cricket Tournament Runner-up</li>
                <li class="list-group-item">📜 Web Development Workshop Certificate</li>
                <li class="list-group-item">⭐ Best Student Award - 2025</li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
