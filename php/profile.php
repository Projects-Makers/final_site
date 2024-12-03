<div class="section1">
<?php
// Rozpocznij sesję, jeśli jeszcze nie została rozpoczęta
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Sprawdź, czy użytkownik jest zalogowany
if (!isset($_SESSION['username'])) {
    // Jeśli użytkownik nie jest zalogowany, przekieruj go na stronę logowania
    header("Location: index.php?strona=login/login");
    exit();
}

// Zakładamy, że e-mail i hasło są przechowywane w sesji (w rzeczywistości hasło nie powinno być przechowywane w sesji)
$email = isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : 'Nie ustawiono';
$password = isset($_SESSION['password']) ? htmlspecialchars($_SESSION['password']) : 'Nie ustawiono'; // Tutaj powinno być rzeczywiste hasło, ale dla bezpieczeństwa nie powinno być przechowywane w sesji

// Wyświetl dane profilu użytkownika
echo '<div class="container">';
echo '<h1>Witaj, ' . htmlspecialchars($_SESSION['username']) . '!</h1>';
echo '<div class="profile-info">';
echo '<p><strong>Nazwa użytkownika:</strong> ' . htmlspecialchars($_SESSION['username']) . '</p>';
echo '<p><strong>E-mail:</strong> ' . htmlspecialchars($email) . '</p>';
echo '<p><strong>Hasło:</strong> <span id="password-display">********</span> <button id="toggle-password" onclick="togglePassword()">👁️</button></p>'; // Zasłonięte hasło
echo '</div>';
echo '<a class="logout-button" href="index.php?strona=login/logout">Wyloguj się</a>';
echo '</div>';
echo '<pre>';
print_r($_SESSION); // To wyświetli wszystkie dane w sesji
echo '</pre>';
?>

<script>
function togglePassword() {
    var passwordDisplay = document.getElementById('password-display');
    var currentText = passwordDisplay.innerText;

    if (currentText === '********') {
        passwordDisplay.innerText = '<?php echo htmlspecialchars($password); ?>'; // Wyświetl hasło
    } else {
        passwordDisplay.innerText = '********'; // Zasłoń hasło
    }
}
</script>
</div>
