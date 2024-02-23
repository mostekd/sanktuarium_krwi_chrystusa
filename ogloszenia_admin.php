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
    <nav>
        <ul class="nav-links">
            <li> 
                <a href="./index_admin.html">Strona Główna</a>
            </li>   
            <li>
                <a href="./sakramenty_admin.html">Sakramenty</a>
                <div class="submenu">
                    <a href="./chrzest_admin.html">Chrzest</a>
                    <hr>
                    <a href="./eucharystia_admin.html">Komunia Święta</a>
                    <hr>
                    <a href="./spowiedz_admin.html">Pokuta i pojednanie</a>
                    <hr>
                    <a href="./bierzmowanie_admin.html">Bierzmowanie</a>
                    <hr>
                    <a href="./malzenstwo_admin.html">Małżeństwo</a>
                    <hr>
                    <a href="./kaplanstwo_admin.html">Kapłaństwo</a>
                    <hr>
                    <a href="./namaszczenie_chorych_admin.html">Namaszczenie chorych</a>
                    <!-- Dodaj więcej podstron, jeśli jest to potrzebne -->
                </div>
            </li>
            <li>
                <a href="./o_parafii_admin.html">O Parafii</a>
                <div class="submenu">
                    <a href="./duszpasterze_admin.html">Duszpasterze</a>
                    <hr>
                    <a href="./galeria_admin.html">Galeria</a>
                    <hr>
                    <a href="./ogloszenia_admin.html">Ogłoszenia</a>
                    <!-- Dodaj więcej podstron, jeśli jest to potrzebne -->
                </div>
            </li>
            <li>
                <a href="./kalendarz_admin.html">Kalendarz</a>
            </li>
            <li>
                <a href="./grupy_i_wspolnoty_admin.html">Grupy i Wspólnoty</a>
                <div class="submenu">
                    <a href="./nowe_buklaki_admin.html">Nowe Bukłaki</a>
                    <hr>
                    <a href="./32_swdh_zwiad_admin.html">32 ŚWDH "Zwiad"</a>
                    <!-- Dodaj więcej podstron, jeśli jest to potrzebne -->
                </div>
            </li>
            <li>
                <a href="./kdm_admin.html">Kasperiańskie Dni Młodzierzy</a>
            </li>
            <li>
                <a href="./kontakt_admin.html">Kontakt</a>
            </li>
        </ul>
        <div class="burger">&#9776;</div> <!-- XDDDDDDDDDD - mac -->

    </nav>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                nazwa wpisu: <input type="text" name="title"><br>
                treść: <input type="text" name="description"><br>
                <input type="submit">
            </form>


    <?php

    require_once("db_connection.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $date = date('Y-m-d H:i:s');
        $description = $_POST['description'];
        
        
        if (empty($title) || empty($description)) {
            echo "Wpis nie może być pusty!";
            exit;
        } else {
            $query = "INSERT INTO sanktuarium_krwii_chrystusa.wpisy (tytul_wpisu, tresc_wpisu, data) VALUES ('$title', '$description', '$date')";
            $stmt = $pdo->query($query);
        }

        echo "Wpis dodany pomyślnie!";
        exit;
    }
    ?>


    <script src="./js/script.js"></script>
</body>
</html>
