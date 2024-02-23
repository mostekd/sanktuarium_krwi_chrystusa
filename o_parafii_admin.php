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
                <a href="./index_admin.php">Strona Główna</a>
            </li>   
            <li>
                <a href="./sakramenty_admin.php">Sakramenty</a>
                <div class="submenu">
                    <a href="./chrzest_admin.php">Chrzest</a>
                    <hr>
                    <a href="./eucharystia_admin.php">Komunia Święta</a>
                    <hr>
                    <a href="./spowiedz_admin.php">Pokuta i pojednanie</a>
                    <hr>
                    <a href="./bierzmowanie_admin.php">Bierzmowanie</a>
                    <hr>
                    <a href="./malzenstwo_admin.php">Małżeństwo</a>
                    <hr>
                    <a href="./kaplanstwo_admin.php">Kapłaństwo</a>
                    <hr>
                    <a href="./namaszczenie_chorych_admin.php">Namaszczenie chorych</a>
                    <!-- Dodaj więcej podstron, jeśli jest to potrzebne -->
                </div>
            </li>
            <li>
                <a href="./o_parafii_admin.php">O Parafii</a>
                <div class="submenu">
                    <a href="./duszpasterze_admin.php">Duszpasterze</a>
                    <hr>
                    <a href="./galeria_admin.php">Galeria</a>
                    <hr>
                    <a href="./ogloszenia_admin.php">Ogłoszenia</a>
                    <!-- Dodaj więcej podstron, jeśli jest to potrzebne -->
                </div>
            </li>
            <li>
                <a href="./kalendarz_admin.php">Kalendarz</a>
            </li>
            <li>
                <a href="./grupy_i_wspolnoty_admin.php">Grupy i Wspólnoty</a>
                <div class="submenu">
                    <a href="./nowe_buklaki_admin.php">Nowe Bukłaki</a>
                    <hr>
                    <a href="./32_swdh_zwiad_admin.php">32 ŚWDH "Zwiad"</a>
                    <!-- Dodaj więcej podstron, jeśli jest to potrzebne -->
                </div>
            </li>
            <li>
                <a href="./kdm_admin.php">Kasperiańskie Dni Młodzierzy</a>
            </li>
            <li>
                <a href="./kontakt_admin.php">Kontakt</a>
            </li>
        </ul>
        <div class="burger">&#9776;</div>
    </nav>
    <script src="./js/script.js"></script>
</body>
</html>
