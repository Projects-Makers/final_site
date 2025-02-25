<section>
<center>
<div class="profil-container">
<?php
require("config.php");

$nr = $_GET["nr"];

$wynik = mysqli_query($conn,"SELECT * from atrakcje where id = $nr");
$wiersz = mysqli_fetch_array($wynik);
    
$imagePath = 'zdj_atrakcje/' . $wiersz["id"] . '.jpg';
if (file_exists($imagePath)) {
    echo '<img src="' . $imagePath . '" alt="' . $wiersz["nazwa"] . '">';
} else {
    echo '<img src="zdj_atrakcje/nic.png" alt="Brak zdjęcia">';
}
echo '<div class="text">' . $wiersz["nazwa"] . '';

?>
</div>
</center>
</section>