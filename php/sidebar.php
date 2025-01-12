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
    <div class="icon"><img src="icons/shop.png" alt="Shop"></div>
    <?php
if (isset($_SESSION['username'])) {
    echo '<a href="index.php?strona=profil"><div class="icon"><img src="' . $zdjecie_profilowe_path . '" alt="Profilowe" class="zdj-profilowe">'. '</div></a>';
} else {
    echo '<div class="icon"><img src="icons/user.png" alt="Map"></div>';
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

        <a href="#"><div class="extra-icon"><img src="icons/shop.png" alt="Map">Sklep</div></a>
        <?php
if (isset($_SESSION['username'])) {
    echo '<a href="index.php?strona=profil"><div class="extra-icon"><img src="' . $zdjecie_profilowe_path . '" alt="Profilowe" class="zdj-profilowe">' . htmlspecialchars($skrocone) . '</div></a>';
} else {
    echo '<div class="extra-icon konto"><img src="icons/user.png" alt="Map">Konto</div>';
}
?>

        <a href="#"><div class="extra-icon"><img src="icons/cogwheel.png" alt="Map">Ustawienia</div></a>
    </div>

</aside>