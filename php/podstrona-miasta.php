<div class="section1">
<?php
include("php/sidebar.php");
?>
<div class="center1">
<hr style="width: 450px; height: 1px; background-color: gray; "></hr>
<div class="czcionka">
    <?php
    require("config.php");
    $nr = $_GET["id"];
    $wynik = mysqli_query($conn,"SELECT * FROM  miasta where id='$nr'");
    $wiersz = mysqli_fetch_array($wynik);
    echo '<b>' . $wiersz["miasto"] . '</b>';
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
<?php
require("config.php"); 
$nr = $_GET["miasto"]; // Pobranie ID miasta z URL
$wynik = mysqli_query($conn,"SELECT * FROM atrakcje WHERE miasto='$nr'"); // Filtrowanie atrakcji dla danego miasta
while ($wiersz = mysqli_fetch_array($wynik))
{
   echo '<div class="info2">'; // Dodanie stylizowanego bloku
   echo '<div class="czcionka">' . htmlspecialchars($wiersz["nazwa"]) . '</div>';
   echo '<p> Cena: ' . htmlspecialchars($wiersz["cena"]) . '</p>';
   echo '<p> Godziny otwarcia: ' . htmlspecialchars($wiersz["godz"]) . '</p>';
   echo '<p> Lokalizacja: ' . htmlspecialchars($wiersz["lokalizacja"]) . '</p>';
   echo '</div>'; // Zakończenie bloku
}
?>

</div>
</div>
</div>
</div>