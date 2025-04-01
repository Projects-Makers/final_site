<?php
require("config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pobranie ID miasta, które ma zostać usunięte
    $xmiasto = $_POST["xmiasto"];

    // Zapytanie SQL usuwające miasto z bazy danych
    $wynik = mysqli_query($conn, "DELETE FROM miasta WHERE id_miasta = '$xmiasto'");

    // Przekierowanie do strony po wykonaniu operacji
    if ($wynik) {
        header("Location: index.php?strona=admin");
    } else {
        echo "Wystąpił błąd podczas usuwania miasta.";
    }
}
?>
