<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Śląsk</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/sidebar.css">
    <link rel="stylesheet" href="style/informacje.css">
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
<?php
if (!isset($_GET["strona"]))
    {$plik = 'srodek';}
else
  {$plik = $_GET["strona"];}

$roz = '.php';

$directory = 'php/';
include("php/login.php");

if($plik == 'srodek'){
}

include("php/map.php");
include("php/sidebar.php");
echo '<section>';
include("$directory$plik$roz");

echo '</section>';
?>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<script src="javascript/baner.js"></script>
<script src="javascript/login_show.js"></script>
<script src="javascript/map.js"></script>
</body>
</html>
