<div class="baner-container1">

<hr class="banner-divider">
    <h1 class="title-centered">
	<?php
	require("config.php");
	$nr = $_GET["nr"];
	$wynik = mysqli_query($conn,"SELECT * from miasta where id_miasta = $nr");
	while ($wiersz = mysqli_fetch_array($wynik)){
 	echo $wiersz["name"] ;
	}
	?>
</h1>
    <hr class="banner-divider">

    

		<div class="content-wrapper">

		<div class="baner-podstrona">
			
		<?php
		require("config.php");
		$nr = $_GET["nr"];
		$wynik = mysqli_query($conn,"SELECT * from miasta where id_miasta = $nr");
		while ($wiersz = mysqli_fetch_array($wynik)){
		    $imagePath = 'zdj_miasta/' . $wiersz["id_miasta"] . '.webp';
		if (file_exists($imagePath)) {
        echo '<img src="' . $imagePath . '" alt="' . $wiersz["name"] . '">';
		} else {
        echo '<img src="zdj_atrakcje/nic.webp" alt="Brak zdjęcia">';
		}
		}
		?>
		</div>

		
		<div class="baner-container">
		<hr class="banner-divider">
    	<h1 class="title-centered">Opis</h1>
    	<hr class="banner-divider">

		<?php
			require("config.php");
		$nr = $_GET["nr"];
		$wynik = mysqli_query($conn,"SELECT * from miasta where id_miasta = $nr");
		while ($wiersz = mysqli_fetch_array($wynik)){
		echo  $wiersz["description"] ;
		}
		?>
        </div>
		

		</div>
</div>
</div>

<div class="container-info">
<hr class="banner-divider">
    <h1 class="title-centered">Atrakcje</h1>
    <hr class="banner-divider">
<?php
require("config.php");

$nr = $_GET["nr"];

$wynik = mysqli_query($conn,"SELECT * from atrakcje where lp = $nr");
while ($wiersz = mysqli_fetch_array($wynik)){
    
    echo '<a href="index.php?strona=p_p_a&l=' . $nr . '&nr=' . $wiersz["id"] . '"><div class="city-card-info">';
    $imagePath = 'zdj_atrakcje/' . $wiersz["id"] . '.webp';
    if (file_exists($imagePath)) {
        echo '<img src="' . $imagePath . '" alt="' . $wiersz["nazwa"] . '">';
    } else {
        echo '<img src="zdj_atrakcje/nic.webp" alt="Brak zdjęcia">';
    }
    echo '<div class="title-centered" style="margin-top:10px;">' . $wiersz["nazwa"] . '';
    echo '</div></a></div>';
}
?>
</div>
<div class="container-info-restauracje">
<hr class="banner-divider">
    <h1 class="title-centered">Restauracje</h1>
    <hr class="banner-divider">
<?php
require("config.php");

$nr = $_GET["nr"];
$wynik = mysqli_query($conn,"SELECT * from restauracje where lp = $nr");
while ($wiersz = mysqli_fetch_array($wynik)){
    echo '<a href="index.php?strona=p_p_r&l=' . $nr . '&nr=' . $wiersz["lp"] . '"><div class="city-card-info">';
    $imagePath = 'zdj_restauracje/' . $wiersz["id"] . '.webp';
    if (file_exists($imagePath)) {
        echo '<img src="' . $imagePath . '" alt="' . $wiersz["nazwa"] . '">';
    } else {
        echo '<img src="zdj_atrakcje/nic.webp" alt="Brak zdjęcia">';
    }
    echo '<div class="title-centered" style="margin-top:10px;">' . $wiersz["nazwa"] . '';
    echo '</div></a></div>';
 }
?>
</div>