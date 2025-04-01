<?php
require("config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pobranie ID atrakcji, która ma zostać usunięta
    $xatrakcja = $_POST["xatrakcja"];

    // Zapytanie SQL usuwające atrakcję z bazy danych
    $wynik = mysqli_query($conn, "DELETE FROM atrakcje WHERE id = '$xatrakcja'");

    // Przekierowanie do strony po wykonaniu operacji
    if ($wynik) {
        header("Location: index.php?strona=admin");
    } else {
        echo "Wystąpił błąd podczas usuwania atrakcji.";
    }
}
?>
