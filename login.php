<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("db_connection.php"); // Załóżmy, że to plik z połączeniem do bazy danych

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Sprawdzenie danych logowania w bazie danych
    $query = "SELECT * FROM Administratorzy WHERE login = :username AND haslo = :password";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $password);
    $stmt->execute();

    // Jeśli dane logowania są poprawne, zaloguj użytkownika
    if ($stmt->rowCount() > 0) {
        $_SESSION["admin_logged_in"] = true;
        header("Location: admin_panel.php");
        exit();
    } else {
        $error_message = "Błędny login lub hasło.";
    }
}
?>
<head>
    <link rel="stylesheet" href="./login.css">
</head>
<div id="loginPage" class="login-container">
    <h2>Logowanie do Panelu Administracyjnego</h2>

    <?php
    if (isset($error_message)) {
        echo '<p style="color: red;">' . $error_message . '</p>';
    }
    ?>

    <form method="post" action="login.php" class="login-form">
        <div class="form-group">
            <label for="username">Nazwa użytkownika:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
        </div>
        <div class="form-group">
            <label for="password">Hasło:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="form-group">
            <button type="submit">Zaloguj się</button><br><br>
            <button><a href="index.html">Strona Główna</a></button>
        </div>
    </form>
</div>