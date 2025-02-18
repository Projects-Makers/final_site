<?php 
require("config.php");

$xtyt = $_POST["xnazwa"];
$xopis = $_POST["xopis"];
$xcena = $_POST["xcena"];
$xlok = $_POST["xlok"];
$xgodz = $_POST["xgodz"];
$xmiasto = $_POST["xmiasto"];

// Sprawdź liczbę kolumn w tabeli book
$wynik = mysqli_query($conn, "INSERT INTO restauracje  VALUES ('','$xnazwa', '$xcena', '$xlok', '$xgodz', '$xmiasto', '$xopis')");


header("Location: index.php?strona=srodek");

?>