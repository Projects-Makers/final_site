<?php
require("config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pobranie ID restauracji, która ma zostać usunięta
    $xrestaurant = $_POST["xrestaurant"];

    // Zapytanie SQL usuwające restaurację z bazy danych
    $wynik = mysqli_query($conn, "DELETE FROM restauracje WHERE id = '$xrestaurant'");

    // Przekierowanie do strony po wykonaniu operacji
    if ($wynik) {
        header("Location: index.php?strona=admin");
    } else {
        echo "Wystąpił błąd podczas usuwania restauracji.";
    }
}
?>
