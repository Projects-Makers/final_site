<!-- Zoptymalizowany HTML -->
<div class="baner-container1">
    <hr class="banner-divider">
    <h1 class="title-centered">Śląsk</h1>
    <hr class="banner-divider">
    
    <div class="content-wrapper">
        <div class="baner-container">
            <h2>Województwo Śląskie</h2>
            <p>Śląsk to jeden z najważniejszych regionów Polski...</p>
            
            <h3>Geografia</h3>
            <p>Województwo Śląskie znajduje się w południowej części Polski...</p>
            
            <h3>Historia</h3>
            <p>Śląsk ma bogatą historię...</p>
            
            <h3>Katowice</h3>
            <p>Stolicą województwa Śląskiego są Katowice...</p>
        </div>

        <div class="baner"></div>
    </div>
</div>

<hr class="banner-divider">
<h1 class="title-centered">MIASTA</h1>
<hr class="banner-divider">

<div class="container">
<?php 
require("config.php");

$querymiasta = "SELECT id_miasta, name FROM miasta";  // Ograniczenie zapytania do potrzebnych kolumn
$wynikmiasta = mysqli_query($conn, $querymiasta);

if (!$wynikmiasta) {
    die("Błąd zapytania: " . mysqli_error($conn));
}

if (mysqli_num_rows($wynikmiasta) == 0) {
    echo "<p>Brak atrakcji powiązanych z miastem.</p>";
} else {
    while ($miasta = mysqli_fetch_array($wynikmiasta)) {
        echo '<a href="index.php?strona=informacje&nr=' . htmlspecialchars($miasta["id_miasta"]) . '">';
        echo '<div class="city-card">';
        echo '<div class="window-foto">';
        $imagePath = 'zdj/' . $miasta["id_miasta"] . '.webp';
        if (file_exists($imagePath)) {
            echo '<img src="' . $imagePath . '" alt="' . htmlspecialchars($miasta["name"]) . '" class="img" loading="lazy">';
        } else {
            echo '<img src="zdj/nic.webp" alt="Brak zdjęcia" loading="lazy">';
        }
        echo '</div><center>';
        echo '<div class="city-name">' . htmlspecialchars($miasta["name"]) . '</div>';
        echo '</div></center></a>';
    }
}
?>
</div>
