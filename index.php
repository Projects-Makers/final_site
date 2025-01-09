<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Śląsk</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/informacje.css">
</head>
<body>
<?php


if (!isset($_GET["strona"]))
    {$plik = 'srodek';}
else
  {$plik = $_GET["strona"];}

$roz = '.php';

$directory = 'php/';

if($plik == 'srodek'){
  echo '<div class="baner-zdj"></div>';
}

include("php/header.php");


include("$directory$plik$roz");

?>
<script src="javascript/baner.js"></script>
</body>
</html>