<style>
*{
	color:black;
}
</style>
<div class="section1">
<?php
include("php/sidebar.php");
?>
<div class="center1">
<hr style="width: 450px; height: 1px; background-color: gray; "></hr>
<div class="czcionka">
    <?php
    require("config.php");
    $nr = $_GET["id"]; // Pobranie ID miasta z URL

    // Debugowanie ID
    if (!isset($nr)) {
        die("Błąd: brak parametru 'id' w URL.");
    }

    $wynikMiasto = mysqli_query($conn, "SELECT * FROM miasta WHERE id='$nr'");
    if (!$wynikMiasto || mysqli_num_rows($wynikMiasto) == 0) {
        die("Błąd: Miasto o ID '$nr' nie istnieje.");
    }

    $miasto = mysqli_fetch_array($wynikMiasto);
    echo '<b>' . htmlspecialchars($miasto["miasto"]) . '</b>';
    ?>
</div>
<hr style="width: 450px; height: 1px; background-color: gray; "></hr>
<a href="php/informacje.php" class="clickable-div">
<div class="info1">
<div class="czcionka">
Informacje
</div>
</div>
</a>
<hr style="width: 450px; height: 1px; background-color: gray; "></hr>
<div class="czcionka"><b>Atrakcje</b></div>
<hr style="width: 450px; height: 1px; background-color: gray; "></hr>
<div class="atraction-section">

<?php 
require("config.php");

$id_miasta = isset($_GET["id"]) ? intval($_GET["id"]) : 0; 


if ($id_miasta == 0) {
    die("Błąd: brak poprawnego ID miasta.");
}

$wynikMiasto = mysqli_query($conn, "SELECT * FROM Miasta WHERE id='$id_miasta'");
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
        echo '<div class="atraction-section">';
        echo '<h3>' . htmlspecialchars($atrakcja["nazwa"]) . '</h3>';
        echo '<hr style="width: 200px; height: 1px; background-color: white; "></hr>';
        echo '<p>Cena: ' . htmlspecialchars($atrakcja["cena"]) . '</p>';
        echo '<p>Godziny otwarcia: ' . htmlspecialchars($atrakcja["godz"]) . '</p>';
        echo '<p>Lokalizacja: ' . htmlspecialchars($atrakcja["lokalizacja"]) . '</p>';
        echo '</div>';
    }
}
 ?>
</div>
<br>
<hr style="width: 450px; height: 1px; background-color: gray; margin-top: 195px;"></hr>
<div class="czcionka"><b>Restauracje</b></div>
<hr style="width: 450px; height: 1px; background-color: gray; "></hr>
<hr style="width: 450px; height: 1px; background-color: gray; margin-top: 195px;"></hr>
<div class="czcionka"><b>Noclegi</b></div>
<hr style="width: 450px; height: 1px; background-color: gray; "></hr>
</div>
</div>
</div>
</div>
