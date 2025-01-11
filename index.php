<?php
// Włącz wyświetlanie błędów PHP dla łatwiejszego debugowania
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

// Ustawienie domyślnego pliku, jeśli nie ma parametru "strona" w URL
if (!isset($_GET["strona"])) {
    $plik = 'srodek'; // Domyślny plik
} else {
    $plik = $_GET["strona"]; // Pobierz nazwę strony z URL
}

$roz = '.php'; // Rozszerzenie pliku
$directory = 'php/'; // Katalog z plikami PHP

// Dołączenie pliku login.php
include("php/login.php");

// Dołączenie sidebaru
include("php/sidebar.php");

// Zawartość strony, jeśli plik to nie "srodek"
echo '<section>';
include("$directory$plik$roz");
echo '</section>';

// Sesja - zapisz czas wejścia użytkownika
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $users = json_decode(file_get_contents('users.json'), true);
    if (isset($users[$username])) {
        if (isset($_SESSION['czas_wejscia'])) {
            $czas_spedzony = $users[$username]['czas_spedzony'];
            if (!isset($czas_spedzony)) {
                $czas_spedzony = 0;
            }
            $czas_spedzony += (time() - $_SESSION['czas_wejscia']) / 60;
            $users[$username]['czas_spedzony'] = round($czas_spedzony, 0);
            file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));
            unset($_SESSION['czas_wejscia']);
        } else {
            $_SESSION['czas_wejscia'] = time();
        }
    }
}
// Zapisz czas wejścia do sesji
if (!isset($_SESSION['czas_wejscia'])) {
    $_SESSION['czas_wejscia'] = time();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta http-equiv="refresh" content="60">
    <script>
if (window.location.search == '?strona=profil') {
    setInterval(function() {
        window.location.reload();
    }, 60000);
}
    </script>
    <meta charset="UTF-8">
    <title>Śląsk</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/sidebar.css">
    <link rel="stylesheet" href="style/informacje.css">
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="style/profil.css">
    <link rel="stylesheet" href="style/mapa.css">
    <link rel="stylesheet" href="style/slask.css">
</head>
<body>
    <?php
    if ($plik == 'srodek') {
        // Możesz dodać kod dla strony "srodek" tutaj
    }
    ?>

    <!-- Mapa -->
    <div id="mapModal" style="display: none;">
        <div class="close-button">X</div>
        <div id="map" style="width: 100%; height: 400px;"></div>
    </div>

    <button class="mapa-button">Pokaż mapę</button>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script src="javascript/baner.js"></script>
    <script src="javascript/login_show.js"></script>
    <script src="php/map.js"></script>

</body>
</html>
