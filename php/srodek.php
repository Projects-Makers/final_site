<section>
<center>
<hr style="width: 500px; border: 2px solid gray;">
<div class="czcionka1">MIASTA</div>
<hr style="width: 500px; border: 2px solid gray;">
</center>
<br>
<?php 
require("config.php");

$querymiasta = "SELECT * FROM miasta";
$wynikmiasta = mysqli_query($conn, $querymiasta);

if (!$wynikmiasta) {
    die("Błąd zapytania: " . mysqli_error($conn));
}

if (mysqli_num_rows($wynikmiasta) == 0) {
    echo "<p>Brak atrakcji powiązanych z miastem.</p>";
} else {
    while ($miasta = mysqli_fetch_array($wynikmiasta)) {
        echo '<div class="window-city">';
        echo '<div class="window-foto">';
        $imagePath = 'zdj/' . $miasta["id_miasta"] . '.jpg';
        if (file_exists($imagePath)) {
            echo '<a href="index.php?strona=informacje&nr=' . $miasta["id_miasta"] . '"><img src="' . $imagePath . '"></a>';
        } else {
            echo '<img src="zdj/nic.png" alt="Brak zdjęcia" style="width:300px;height:auto;">';
        }
        echo '<br></div><center>';
        echo '<div class="czcionka1"><hr style="width: 300px; border: 2px solid white;">';
        echo '' . htmlspecialchars($miasta["name"]) . '';
        echo '</div>';
        echo '</div></center>';
    }
}
?>
</section>