<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sanktuarium Krwi Chrystusa</title>
</head>
<body>
<header>
    <div class="logo"><img src="./zdj/tło.png" alt="logo"></div>
    <nav>
        <ul class="nav-links">
            <li> 
                <a href="./index.html">Strona Główna</a>
            </li>
            <li>
                <a href="./sakramenty.html">Sakramenty</a>
                <div class="submenu">
                    <a href="./chrzest.html">Chrzest</a>
                    <hr>
                    <a href="./eucharystia.html">Komunia Święta</a>
                    <hr>
                    <a href="./spowiedz.html">Pokuta i pojednanie</a>
                    <hr>
                    <a href="./bierzmowanie.html">Bierzmowanie</a>
                    <hr>
                    <a href="./malzenstwo.html">Małżeństwo</a>
                    <hr>
                    <a href="./kaplanstwo.html">Kapłaństwo</a>
                    <hr>
                    <a href="./namaszczenie_chorych.html">Namaszczenie chorych</a>
                    <!-- Dodaj więcej podstron, jeśli jest to potrzebne -->
                </div>
            </li>
            <li>
                <a href="./o_parafii.html">O Parafii</a>
                <div class="submenu">
                    <a href="./duszpasterze.html">Duszpasterze</a>
                    <hr>
                    <a href="./galeria.html">Galeria</a>
                    <hr>
                    <a href="./ogloszenia.html">Ogłoszenia</a>
                    <!-- Dodaj więcej podstron, jeśli jest to potrzebne -->
                </div>
            </li>
            <li>
                <a href="./kalendarz.html">Kalendarz</a>
            </li>
            <li>
                <a href="./grupy_i_wspolnoty.html">Grupy i Wspólnoty</a>
                <div class="submenu">
                    <a href="./nowe_buklaki.html">Nowe Bukłaki</a>
                    <hr>
                    <a href="./32_swdh_zwiad.html">32 ŚWDH "Zwiad"</a>
                    <!-- Dodaj więcej podstron, jeśli jest to potrzebne -->
                </div>
            </li>
            <li>
                <a href="./kdm.html">Kasperiańskie Dni Młodzierzy</a>
            </li>
            <li>
                <a href="./kontakt.html">Kontakt</a>
            </li>
            <li>
                <a href="https://sanktuarium.cpps.pl/">Sanktuarium</a>
            </li>
        </ul>
        <div class="burger">&#9776;</div>
    </nav>
</header>
<section class="main">
    <div class="wpisy">
        <?php 
        require_once("db_connection.php");
        $query = "SELECT * FROM wpisy ORDER BY data DESC";
        $stmt = $pdo->query($query);
        $ogloszenia = $stmt->fetchAll();

            foreach ($ogloszenia as $ogloszenie) {
                echo "<div class='wpis'>";
                echo "<h2>" . $ogloszenie["tytul_wpisu"] . "</h2>";
                echo "<p>" . $ogloszenie["data"] . "</p>";
                echo "<p>" . $ogloszenie["tresc_wpisu"] . "</p>";
                echo "</div>";
            }
        ?>
    </div> 
</section>

<script src="./js/script.js"></script>
</body>
</html>