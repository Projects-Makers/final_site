<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>śląsk</title>
    <link rel="stylesheet" href="src/style/Styl.css">
    <link rel="stylesheet" href="src/style/header.css">
    <link rel="stylesheet" href="src/style/login.css">
    <link rel="stylesheet" href="src/style/sidebar.css">
    <link rel="stylesheet" href="src/style/section.css">
    <link rel="stylesheet" href="src/style/footer.css">
    <link rel="stylesheet" href="src/style/light-darck.css">
    <link rel="stylesheet" href="src/style/strona.css">
    <link rel="stylesheet" href="src/style/podstrona.css">
    <link rel="stylesheet" href="src/style/profile.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
</head>
<body>      
<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require("config.php");
include("php/header.php");

if (!isset($_GET["strona"]))
    {$plik = 'section';}
else
  {$plik = $_GET["strona"];}
$roz = '.php';
$directory = 'php/';
include("$directory$plik$roz");
include("php/footer.php");
?>

</body>
</html>

<script src="src/javascript/login.js"></script>
<script src="src/javascript/register.js"></script>
<script src="src/javascript/mapa.js"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>


