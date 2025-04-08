<section>
<div class="baner-container2">
<div class="city-card-info">
<?php
require("config.php");

$nr = $_GET["nr"];

$wynik = mysqli_query($conn,"SELECT * from atrakcje where id = $nr");
$wiersz = mysqli_fetch_array($wynik);
    
    $imagePath = 'zdj_atrakcje/' . $wiersz["id"] . '.webp';
    if (file_exists($imagePath)) {
        echo '<img src="' . $imagePath . '"">';
    } else {
        echo '<img src="zdj_atrakcje/nic.webp" alt="Brak zdjęcia">';
    }
    echo '</div>';

?>
<?php
require("config.php");
$nr = $_GET["nr"];
$wynik = mysqli_query($conn,"SELECT * from atrakcje where id = $nr");
$wiersz = mysqli_fetch_array($wynik);
echo '' . $wiersz["nazwa"] . '';
?>
</div>	
</section>