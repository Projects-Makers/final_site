<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<header>
    <div class="wypelniacz">
        <a href="index.php?strona=section">Strona Główna</a>
        <a href="#">Napis</a>
    </div>

    <div class="napis">
        <a href="index.php?strona=section">Podróż po Śląsku</a>
    </div>

    <div class="login">
    <?php if (isset($_SESSION['username'])): ?>
        <div class="user-menu">
            <?php echo htmlspecialchars($_SESSION['username']); ?>
            <a href="index.php?strona=profile"></a>
        </div>
               <a href="index.php?strona=login/logout"><div class="sign-in-button">Wyloguj</div></a>
            
        <?php else: ?>
            <!-- Gdy użytkownik nie jest zalogowany -->
            <a href="index.php?strona=login/login"><div class="sign-in-button">Sign in</div></a>
            <a href="index.php?strona=login/register"><div class="sign-up-button">Sign up</div></a>
        <?php endif; ?>
    </div>
</header>
