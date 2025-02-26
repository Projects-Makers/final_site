<section>
<div class="profil-container-p_p">
<?php
require("config.php");

$nr = $_GET["nr"];
echo '<div class="zdjecie1">';
$wynik = mysqli_query($conn,"SELECT * from atrakcje where id = $nr");
$wiersz = mysqli_fetch_array($wynik);
    
$imagePath = 'zdj_atrakcje/' . $wiersz["id"] . '.jpg';
echo '<div class="city-card-info1">';
if (file_exists($imagePath)) {
    echo '<img src="' . $imagePath . '" alt="' . $wiersz["nazwa"] . '">';
} else {
    echo '<img src="zdj_atrakcje/nic.png" alt="Brak zdjęcia">';
}
echo '</div>';
echo '</div>';
echo '<center><hr style="width: 40vh; border: 0.2vh solid gray;">' . $wiersz["nazwa"] . '<hr style="width: 40vh; border: 0.2vh solid gray;">';

?>
jhavgsghfsydghuysdgyufgysudghfygdsyugfyudsgyufgydsgfyugsdyufgyudsgfy
jhavgsghfsydghuysdgyufgysudghfygdsyugfyudsgyufgydsgfyugsdyufgyudsgfy
jhavgsghfsydghuysdgyufgysudghfygdsyugfyudsgyufgydsgfyugsdyufgyudsgfy
jhavgsghfsydghuysdgyufgysudghfygdsyugfyudsgyufgydsgfyugsdyufgyudsgfy
jhavgsghfsydghuysdgyufgysudghfygdsyugfyudsgyufgydsgfyugsdyufgyudsgfy
jhavgsghfsydghuysdgyufgysudghfygdsyugfyudsgyufgydsgfyugsdyufgyudsgfy
</center>
</div>
</section>