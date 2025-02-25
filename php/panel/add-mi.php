<?php 
require("config.php");

$xname = $_POST["xname"];
$xpopulation = $_POST["xpopulation"];
$xland = $_POST["xland"];
$xlng = $_POST["xlng"];
$xlat = $_POST["xlat"];
$xdescription = $_POST["xdescription"];

// Sprawdź liczbę kolumn w tabeli book
$wynik = mysqli_query($conn, "INSERT INTO miasta VALUES ('','$xname', '$xpopulation', '$xland', '$xlng', '$xlat', '$xdescription')");


header("Location: index.php?strona=srodek");

?>