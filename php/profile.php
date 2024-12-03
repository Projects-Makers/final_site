<div class="section1">
<?php
// Rozpocznij sesję, jeśli jeszcze nie została rozpoczęta
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Tutaj możesz dodać kod do obsługi profilu użytkownika
// Na przykład sprawdzenie, czy użytkownik jest zalogowany
if (!isset($_SESSION['username'])) {
    // Jeśli użytkownik nie jest zalogowany, przekieruj go na stronę logowania
    header("Location: index.php?strona=login/login");
    exit();
}
echo "Witaj, " . htmlspecialchars($_SESSION['username']) . "!";
echo "<br>";
echo "To jest Twój profil.";
echo "<br>";
echo '<a href="index.php?strona=login/logout">Wyloguj się</a>';
?>
</div>