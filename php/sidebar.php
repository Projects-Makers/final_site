<?php

if (isset($_SESSION['username'])) {
    $users = json_decode(file_get_contents('users.json'), true);
    
    $username = $_SESSION['username'];
    $rank = $_SESSION['rank'];
    $zdjecie_profilowe_path = isset($users[$username]['zdjecie_profilowe']) ? $users[$username]['zdjecie_profilowe'] : null;
    $skrocone = substr($username, 0, 9);
}
?>

<aside class="sidebar">
    <div class="icon"><img src="icons/home.png" alt="Home"></div>
    <div class="icon"><img src="icons/map.png" alt="Map"></div>
    <div class="icon" id="shop-btn1"><img src="icons/shop.png" alt="Shop"></div>
    <?php
if (isset($_SESSION['username'])) {
    echo '<a href="index.php?strona=profil"><div class="icon"><img src="' . $zdjecie_profilowe_path . '" alt="Profilowe" class="zdj-profilowe">'. '</div></a>';
} else {
    echo '<div class="icon konto"><img src="icons/user.png" alt="Map"></div>';
}
?>
    <div class="icon"><img src="icons/cogwheel.png" alt="Settings"></div>

    <div class="extra">
        <a href="index.php?strona=srodek"><div class="extra-icon"><img src="icons/home.png" alt="Home">Główna</div></a>
        <div class="extra-icon mapa-button">
    <img src="icons/map.png" alt="Map"> Mapa
</div>

<!-- Modal z mapą -->
<div id="mapModal" class="modal">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <div id="map" style="width: 100%; height: 95%;"></div>
    </div>
</div>

        <a href="#"><div class="extra-icon" id="shop-btn"><img src="icons/shop.png" alt="Map">Sklep</div></a>
        <?php
if (isset($_SESSION['username'])) {
    echo '<a href="index.php?strona=profil"><div class="extra-icon"><img src="' . $zdjecie_profilowe_path . '"class="zdj-profilowe">' . htmlspecialchars($skrocone) . '</div></a>';
} else {
    echo '<div class="extra-icon konto"><img src="icons/user.png" alt="Map">Konto</div>';
}
?>

        <a href="index.php?strona=settings"><div class="extra-icon"><img src="icons/cogwheel.png" alt="Map">Ustawienia</div></a>
    </div>
    <div id="shop-modal" class="shop-modal">
        <div class="sklep">
        <span class="close-button1">&times;</span>
            <div class="shop-modal-content">
            <div class="shop-list">
    <?php 
    require("config.php");

    $querymiasta = "SELECT * FROM wycieczki";  
    $wynikmiasta = mysqli_query($conn, $querymiasta);

    if (!$wynikmiasta) {
        echo "<p>Błąd zapytania: " . mysqli_error($conn) . "</p>";
    } elseif (mysqli_num_rows($wynikmiasta) == 0) {
        echo "<p>Brak atrakcji powiązanych z miastem.</p>";
    } else {
        while ($miasto = mysqli_fetch_array($wynikmiasta)) {
            $imagePath = 'zdj/' . $miasto["id"] . '.webp';
            if (!file_exists($imagePath)) {
                $imagePath = 'zdj/nic.webp';
            }
            ?>
<<<<<<< HEAD
            <div class="shop-item" onclick="window.location.href='index.php?strona=informacje&nr=<?php echo $miasto['id']; ?>';">
=======
            <div class="shop-item" onclick="window.location.href='index.php?strona=sklep&nr=<?php echo $miasto['id']; ?>';">
>>>>>>> a8012d3269b5e63b3b2daf540f3657c02ba2d593
                <div class="shop-item-image">
                    <img src="<?php echo $imagePath; ?>" alt="<?php echo htmlspecialchars($miasto["nazwa"]); ?>" loading="lazy">
                </div>
                <div class="shop-item-info">
                    <h3 class="shop-item-title"><?php echo htmlspecialchars($miasto["nazwa"]); ?></h3>
<<<<<<< HEAD
                    <p class="shop-item-location">Lokalizacja: <?php echo htmlspecialchars($miasto["lokalizacja"] ?? 'Nieznana'); ?></p>
=======
>>>>>>> a8012d3269b5e63b3b2daf540f3657c02ba2d593
                    <p class="shop-item-price">Cena: <?php echo htmlspecialchars($miasto["cena"] ?? 'Brak danych'); ?> zł</p>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>


            </div>
        </div>
</div>
</aside>
