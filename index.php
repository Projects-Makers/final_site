<?php
if (isset($_GET['strona']) && $_GET['strona'] === 'get_markers') {
    include 'php/get_markers.php';
    exit; // Zatrzymujemy dalsze przetwarzanie, aby nie ładować reszty strony
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

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
    <link rel="stylesheet" href="style/settings.css">
    <link rel="stylesheet" href="style/admin.css">
</head>
<body>
<?php
$directory = 'php/';

// Wybór pliku do załadowania
if (!isset($_GET["strona"])) {
    $plik = 'srodek';
} else {
    $plik = $_GET["strona"];
}

// Sprawdź, czy plik istnieje
$sciezka_pliku = "$directory$plik.php";
if (file_exists($sciezka_pliku)) {
    include("php/login.php"); // Obsługa logowania
    include("php/sidebar.php"); // Pasek boczny
    echo '<section>';
    include($sciezka_pliku); // Główny plik strony
    echo '</section>';
} else {
    echo '<section><h1>404 - Nie znaleziono strony</h1></section>';
}

// Obsługa czasu spędzonego przez użytkownika na stronie
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $users = json_decode(file_get_contents('users.json'), true);
    if (isset($users[$username])) {
        if (isset($_SESSION['czas_wejscia'])) {
            $czas_spedzony = $users[$username]['czas_spedzony'] ?? 0;
            $czas_spedzony += (time() - $_SESSION['czas_wejscia']) / 60;
            $users[$username]['czas_spedzony'] = round($czas_spedzony, 0);
            file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));
            unset($_SESSION['czas_wejscia']);
        } else {
            $_SESSION['czas_wejscia'] = time();
        }
    }
}
// Zapisz czas wejścia do sesji, jeśli jeszcze nie istnieje
if (!isset($_SESSION['czas_wejscia'])) {
    $_SESSION['czas_wejscia'] = time();
}
?>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script src="javascript/baner.js"></script>
<script src="javascript/login_show.js"></script>
<script src="javascript/map.js"></script>
<script src="javascript/theme_toggle.js"></script>
<script src="javascript/translation.js"></script>
<script>
        // Ładowanie wybranego języka po załadowaniu strony
        document.addEventListener('DOMContentLoaded', () => {
            const language = localStorage.getItem('selectedLanguage') || 'en'; // Domyślnie angielski
            loadTranslations(language); // Załaduj tłumaczenia
        });

        // Zmiana języka
        function changeLanguage() {
            const language = document.getElementById('language-selector').value;
            localStorage.setItem('selectedLanguage', language); // Zapisz wybór w localStorage
            loadTranslations(language); // Zmień tłumaczenia
        }
</script>
</body>
</html>