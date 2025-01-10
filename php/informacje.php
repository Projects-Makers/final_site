<section>
<center>
<div class="info">Informacje</div>
<hr style="width: 10vh; border: 0.2vh solid black;">
<div class="czcionka1">Atrakcje</div>
<hr style="width: 10vh; border: 0.2vh solid black;">
<?php 
require("config.php");

$id_miasta = isset($_GET["id_miasta"]) ? intval($_GET["id_miasta"]) : 0; 


if ($id_miasta == 0) {
    die("Błąd: brak poprawnego ID miasta.");
}

$wynikMiasto = mysqli_query($conn, "SELECT * FROM miasta WHERE id_miasta='$id_miasta'");
if (!$wynikMiasto || mysqli_num_rows($wynikMiasto) == 0) {
    die("Błąd: Nie znaleziono miasta o podanym ID.");
}

$queryAtrakcje = "SELECT * FROM atrakcje WHERE lp='$id_miasta'";
$wynikAtrakcje = mysqli_query($conn, $queryAtrakcje);

if (!$wynikAtrakcje) {
    die("Błąd zapytania: " . mysqli_error($conn));
}

if (mysqli_num_rows($wynikAtrakcje) == 0) {
    echo "<p>Brak atrakcji powiązanych z miastem.</p>";
} else {
    while ($atrakcja = mysqli_fetch_array($wynikAtrakcje)) {
        echo '<div class="city-card">';
        echo '<h3>' . htmlspecialchars($atrakcja["nazwa"]) . '</h3>';
        echo '<hr style="width: 200px; height: 1px; background-color: white; "></hr>';
        echo '<p>Cena: ' . htmlspecialchars($atrakcja["cena"]) . '</p>';
        echo '<p>Godziny otwarcia: ' . htmlspecialchars($atrakcja["godz"]) . '</p>';
        echo '<p>Lokalizacja: ' . htmlspecialchars($atrakcja["lokalizacja"]) . '</p>';
        echo '</div>';
    }
}
 ?>
</center>
</section>