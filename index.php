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
</head>
<body>      
<?php 
include("index.html");
require("config.php");
include("php/baner.php");
include("php/sidebar.php");

    
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

<script src="javascript/login.js"></script>
<script src="javascript/register.js"></script>
