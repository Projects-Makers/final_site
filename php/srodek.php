
<hr style="width:40vh; border: 0.2vh solid gray;">
    <center><div class="czcionka1"><a href="https://www.flaticon.com/search?word=map">MIASTA</a></div></center>
<hr style="width: 40vh; border: 0.2vh solid gray;">

<br>
<div class="container-1">
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
        echo '<a href="index.php?strona=informacje&nr=' . $miasta["id_miasta"] . '" class="link"><div class="city-card">';
        echo '<div class="window-foto">';
        $imagePath = 'zdj/' . $miasta["id_miasta"] . '.jpg';
        if (file_exists($imagePath)) {
            echo '<img src="' . $imagePath . '" alt="' . $miasta["name"] . '" class="img">';
        } else {
            echo '<img src="zdj/nic.png" alt="Brak zdjęcia" >';
        }
        echo '<br></div><center>';
        echo '<div class="czcionka1"><hr style="width: 25vh; border: 0.2vh solid white;">';
        echo '' . htmlspecialchars($miasta["name"]) . '';
        echo '</div>';
        echo '</div></center></a>';
    }
}
?>
</div>