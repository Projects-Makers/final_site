<div class="baner-container1">
    <hr style="width:40vh; border: 0.2vh solid gray;">
    <center><h1>Śląsk</h1></center>    
    <hr style="width: 40vh; border: 0.2vh solid gray;">
    
    <div class="content-wrapper">
        <!-- Tekst o Śląsku -->
        <div class="baner-container">
            <h2>Województwo Śląskie</h2>
            <p>Śląsk to jeden z najważniejszych regionów Polski, który pełni kluczową rolę w historii przemysłu i gospodarki. Obecnie to jedno z najbardziej rozwiniętych województw, zarówno pod względem gospodarczym, jak i kulturalnym.</p>
            
            <h3>Geografia</h3>
            <p>Województwo Śląskie znajduje się w południowej części Polski i graniczy z Czechami oraz województwami: opolskim, małopolskim, łódzkim i dolnośląskim. Region obejmuje górzyste obszary, jak Beskidy oraz rozległe tereny przemysłowe, jak Górnośląskie Zagłębie Węglowe.</p>
            
            <h3>Historia</h3>
            <p>Śląsk ma bogatą historię, której początek sięga średniowiecza. Region był przez wieki częścią różnych państw, m.in. Królestwa Polskiego, Czech, Austrii i Niemiec. Śląsk był jednym z najważniejszych ośrodków przemysłowych w XIX i XX wieku, zwłaszcza dzięki wydobyciu węgla kamiennego oraz rozwiniętej produkcji stali.</p>
            
            <h3>Katowice</h3>
            <p>Stolicą województwa Śląskiego są Katowice, które stanowią centrum kulturalne, gospodarcze i naukowe regionu. Katowice to miasto z dynamicznym rozwojem, z licznymi nowoczesnymi biurowcami, uczelniami wyższymi oraz atrakcjami turystycznymi, w tym Spodkiem i Muzeum Śląskim.</p>
        </div>

        <!-- Baner ze zdjęciem -->
        <div class="baner">
		</div>
    </div>
</div>





<hr style="width:40vh; border: 0.2vh solid gray;">
    <center><h1 class="Title">MIASTA</h1></center>
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
        $imagePath = 'zdj/' . $miasta["id_miasta"] . '.webp';
        if (file_exists($imagePath)) {
            echo '<img src="' . $imagePath . '" alt="' . $miasta["name"] . '" class="img">';
        } else {
            echo '<img src="zdj/nic.webp" alt="Brak zdjęcia" >';
        }
        echo '<br></div><center>';
        echo '<div class="city-name">' . $miasta["name"] . '</div>';
        echo '</div></center></a>';
    }
}
?>
</div>