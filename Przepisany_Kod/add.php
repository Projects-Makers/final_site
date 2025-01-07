<?php 
require("config.php");

if (!$conn) {
    die("Błąd połączenia: " . mysqli_connect_error());
}

// Debug: Wyświetlenie danych przesłanych z formularza
echo "<pre>";
var_dump($_POST);
echo "</pre>";

$xtyt = mysqli_real_escape_string($conn, $_POST["xtyt"]);
$xcena = mysqli_real_escape_string($conn, $_POST["xcena"]);
$xgodz = mysqli_real_escape_string($conn, $_POST["xgodz"]);
$xlok = mysqli_real_escape_string($conn, $_POST["xlok"]);
$xrodzaj = mysqli_real_escape_string($conn, $_POST["xrodzaj"]);
$xopis = mysqli_real_escape_string($conn, $_POST["xopis"]);

$sql = "INSERT INTO atrakcje (lp, nazwa, opis, cena, godz, miasto, lokalizacja) 
        VALUES ('$xrodzaj', '$xtyt', '$xopis', '$xcena', '$xgodz', 1, '$xlok')";

$wynik = mysqli_query($conn, $sql);

if ($wynik) {
    header("Location: index.php");
    exit();
} else {
    echo "<strong>Błąd zapytania SQL:</strong> " . mysqli_error($conn) . "<br>";
    echo "<strong>Treść zapytania:</strong> <pre>" . htmlspecialchars($sql) . "</pre>";
}
?>
