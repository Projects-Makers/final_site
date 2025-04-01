<section>
<center>
<div class="baner-container1">
    <hr style="width:40vh; border: 0.2vh solid gray;">
    <center><h1>
	<?php
	require("config.php");
	$nr = $_GET["nr"];
	$wynik = mysqli_query($conn,"SELECT * from miasta where id_miasta = $nr");
	while ($wiersz = mysqli_fetch_array($wynik)){
	echo '<div class="text">' . $wiersz["name"] . '';
	}
	?>
	</h1>
	</center>    
    <hr style="width: 40vh; border: 0.2vh solid gray;">
    
    <div class="content-wrapper">
        <div class="baner-container">
		<hr style="width:40vh; border: 0.2vh solid gray;">
        <h2>Opis</h2>
		<hr style="width:40vh; border: 0.2vh solid gray;">
		<?php
			require("config.php");
		$nr = $_GET["nr"];
		$wynik = mysqli_query($conn,"SELECT * from miasta where id_miasta = $nr");
		while ($wiersz = mysqli_fetch_array($wynik)){
		echo '<div class="text">' . $wiersz["description"] . '</div>';
		}
		?>
        </div>
		
        <div class="baner-podstrona">
		<?php
		require("config.php");
		$nr = $_GET["nr"];
		$wynik = mysqli_query($conn,"SELECT * from miasta where id_miasta = $nr");
		while ($wiersz = mysqli_fetch_array($wynik)){
		    $imagePath = 'zdj/' . $wiersz["id_miasta"] . '.webp';
		if (file_exists($imagePath)) {
        echo '<img src="' . $imagePath . '" alt="' . $wiersz["name"] . '">';
		} else {
        echo '<img src="zdj_atrakcje/nic.webp" alt="Brak zdjęcia">';
		}
		}
		?>
		</div>
    </div>
</div>
</div>
<hr class="hr-czcionki1">
<div class="czcionka1">Atrakcje</div>
<hr class="hr-czcionki1">
<div class="container-info">
<?php
require("config.php");

$nr = $_GET["nr"];

$wynik = mysqli_query($conn,"SELECT * from atrakcje where lp = $nr");
while ($wiersz = mysqli_fetch_array($wynik)){
    
    echo '<a href="index.php?strona=p_p&nr=' . $wiersz["id"] . '"><div class="city-card-info">';
    $imagePath = 'zdj_atrakcje/' . $wiersz["id"] . '.webp';
    if (file_exists($imagePath)) {
        echo '<img src="' . $imagePath . '" alt="' . $wiersz["nazwa"] . '">';
    } else {
        echo '<img src="zdj_atrakcje/nic.webp" alt="Brak zdjęcia">';
    }
    echo '<div class="text">' . $wiersz["nazwa"] . '';
    echo '<p>' . $wiersz["cena"] . '</div>';
    echo '</div></a>';
}
?>
</div>
<hr class="hr-czcionki1">
<div class="czcionka1">Restauracje</div>
<hr class="hr-czcionki1">
<?php
require("config.php");

$nr = $_GET["nr"];
echo '<div class="container-info">';
$wynik = mysqli_query($conn,"SELECT * from restauracje where lp = $nr");
while ($wiersz = mysqli_fetch_array($wynik)){
    echo '<div class="city-card-info">';
     $imagePath = '../zdj_atrakcje/' . $wiersz["id"] . '.webp';
     echo '<div class="city-card">';
     if (file_exists($imagePath)) {
         echo '<a href="index.php?strona=#&nr=' . $wiersz["id"] . '"><img src="' . $imagePath . '"></a>';
     } else {
        echo '<img src="zdj/nic.webp">';
     }
     echo '' . $wiersz["nazwa"] . '';
     echo '</div></div>';
 }
?>
</div>
</center>
</section>