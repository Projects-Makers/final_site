<header>
    <div class="right">
        <span>Strona Główna</span>
        <span>Mapa</span>
    </div>
    <div class="tytul">Podróż po Śląsku</div>
    <div class="left">
    <?php if (!isset($_SESSION['username'])): ?>
        <div class="user-menu">
        <a href="index.php?strona=profile"><?php echo htmlspecialchars($_SESSION['username']); ?></a>
        </div>
               <a href="index.php?strona=login/logout"><div class="sign-in-button">Wyloguj</div></a>
            
    <?php else: ?>
        <a href="#"><div class="sign-in">Sign in</div></a>
        <a href="#"><div class="sign-up">Sign up</div></a>
        <?php endif; ?>
    </div>
</header>