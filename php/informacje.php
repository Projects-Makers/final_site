<section>
<center>
<div class="info">Informacje</div>
<hr style="width: 30vh; border: 0.2vh solid black;">
<div class="czcionka1">Atrakcje</div>
<hr style="width: 30vh; border: 0.2vh solid black;">
<div class="container">
<?php
require("config.php");

$nr = $_GET["nr"];

$wynik = mysqli_query($conn,"SELECT * from atrakcje where lp = $nr");
while ($wiersz = mysqli_fetch_array($wynik)){
    
    $imagePath = '../zdj/' . $wiersz["id"] . '.jpg';
    echo '<div class="city-card">';
    if (file_exists($imagePath)) {
        echo '<a href="index.php?strona=#&nr=' . $wiersz["id"] . '"><img src="' . $imagePath . '></a>';
    } else {
        echo '<img src="zdj/nic.png">';
    }
    echo '' . $wiersz["nazwa"] . '';
    echo '<p>' . $wiersz["cena"] . '';
    echo '</div>';
}
?>
</div>
<hr style="width: 30vh; border: 0.2vh solid black;">
<div class="czcionka1">Restauracje</div>
<hr style="width: 30vh; border: 0.2vh solid black;">
<?php
require("config.php");

$nr = $_GET["nr"];

$wynik = mysqli_query($conn,"SELECT * from restauracje where lp = $nr");
while ($wiersz = mysqli_fetch_array($wynik)){
    
    $imagePath = '../zdj/' . $wiersz["id_restauracje"] . '.jpg';
    echo '<div class="city-card">';
    if (file_exists($imagePath)) {
        echo '<a href="index.php?strona=#&nr=' . $wiersz["id"] . '"><img src="' . $imagePath . '></a>';
    } else {
        echo '<img src="zdj/nic.png">';
    }
    echo '' . $wiersz["nazwa"] . '';
    echo '</div>';
}
?>
</center>
</section>