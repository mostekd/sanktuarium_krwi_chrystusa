<?php
session_start();

// Sprawdź, czy administrator jest zalogowany
if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administracyjny</title>    
    <link rel="stylesheet" href="admin_panel.css">
</head>
<body>
    <div class="header">
        <h2>Sanktuarium Krwii Chrystusa<br>Panel Administracyjny</h2>
        <button>
            <a href="login.php" id="logout">Wyloguj się</a>
        </button>
    </div>
   
</body>
</html>
