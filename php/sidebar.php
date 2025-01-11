<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<aside class="sidebar">
    <div class="icon"><img src="icons/home.png" alt="Home"></div>
    <div class="icon"><img src="icons/map.png" alt="Map"></div>
    <div class="icon"><img src="icons/shop.png" alt="Shop"></div>
    <div class="icon"><img src="icons/user.png" alt="Account"></div>
    <div class="icon"><img src="icons/cogwheel.png" alt="Settings"></div>

    <div class="extra">
        <a href="index.php?strona=srodek"><div class="extra-icon"><img src="icons/home.png" alt="Home" class="extra-icon-img">Głowna</div></a>
        <div class="extra-icon mapa-button"><img src="icons/map.png" alt="Map" class="extra-icon-img">Mapa</div>
        <a href="#"><div class="extra-icon"><img src="icons/shop.png" alt="Shop" class="extra-icon-img">Sklep</div></a>

        <?php if (isset($_SESSION['username'])): ?>
            <div class="extra-icon"><img src="icons/user.png" alt="User" class="extra-icon-img"><?php echo $_SESSION['username']; ?> <a href="index.php?strona=logout"><img src="icons/logout.png" alt="Logout" class="logout-icon"></a></div>
            <?php else: ?>
                <div class="extra-icon konto"><img src="icons/user.png" alt="User" class="extra-icon-img">Konto</div>
        <?php endif; ?>
        <a href="#"><div class="extra-icon"><img src="icons/cogwheel.png" alt="Settings" class="extra-icon-img">Ustawienia</div></a>
    </div>

</aside>