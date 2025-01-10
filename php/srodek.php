
<hr style="width:40vh; border: 0.2vh solid gray;">
    <center><h1>MIASTA</h1></center>
<hr style="width: 40vh; border: 0.2vh solid gray;">

<br>
<div class="container">
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

        echo '<a href="index.php?strona=informacje&nr=' . $miasta["id_miasta"] . '"><div class="city-card">';


        echo '<div class="window-foto">';
        $imagePath = 'zdj/' . $miasta["id_miasta"] . '.jpg';
        if (file_exists($imagePath)) {
            echo '<img src="' . $imagePath . '" alt="' . $miasta["name"] . '" class="img">';
        } else {
            echo '<img src="zdj/nic.png" alt="Brak zdjęcia" >';
        }
        echo '<br></div><center>';
        echo '<div class="city-name">' . $miasta["name"] . '</div>';
        echo '</div></center></a>';
    }
}
?>
</div>