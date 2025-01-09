<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Śląsk</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/informacje.css">
</head>
<body>
<?php

include("php/header.php");

if (!isset($_GET["strona"]))
    {$plik = 'srodek';}
else
  {$plik = $_GET["strona"];}

$roz = '.php';

$directory = 'php/';

include("$directory$plik$roz");

?>
<script src="javascript/baner.js"></script>
</body>
</html>