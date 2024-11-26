<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>śląsk</title>
    <link rel="stylesheet" href="style/Style.css">
    <link rel="stylesheet" href="style/baner.css">
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="style/sidebar.css">
    <link rel="stylesheet" href="style/section.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/light-darck.css">
    <link rel="stylesheet" href="style/strona.css">
    <link rel="stylesheet" href="style/podstrona.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
</head>
<body>      
<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require("config.php");
include("php/baner.php");
include("php/sidebar.php");

if (!isset($_GET["strona"])) {
    $plik = 'section';
} else {
    $plik = $_GET["strona"];
}

$roz = '.php';
$directory = 'php/';
include("$directory$plik$roz");
include("php/footer.php");
?>
<script>
    document.querySelector('.login-form').addEventListener('submit', function (e) {
        e.preventDefault(); // Zatrzymaj domyślne działanie formularza

        const formData = new FormData(this);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'index.php?strona=login/action_php/login_action', true);

        xhr.onload = function () {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.status === 'success') {
                    // Zaktualizuj baner
                    updateBanner();
                } else {
                    alert(response.message); // Wyświetl błąd
                }
            }
        };

        xhr.send(formData);
    });

    function updateBanner() {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'php/baner.php', true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                document.getElementById('baner').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }
</script>
</body>
</html>

<script src="javascript/login.js"></script>
<script src="javascript/register.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
