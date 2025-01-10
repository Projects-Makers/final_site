<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Śląsk</title>
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
echo'<div class="trzymacz">';

include("php/sidebar.php");
echo '<section>';
include("$directory$plik$roz");

echo '</section></div>';
?>
<script src="javascript/baner.js"></script>
<script src="javascript/login_show.js"></script>
</body>
</html>
