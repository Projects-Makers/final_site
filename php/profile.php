<div class="section1">
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Sprawdź, czy użytkownik jest zalogowany
if (!isset($_SESSION['username'])) {
    // Jeśli użytkownik nie jest zalogowany, przekieruj go na stronę logowania
    header("Location: index.php?strona=login/login");
    exit();
}

// Zakładamy, że e-mail jest przechowywany w sesji
$email = isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : 'Nie ustawiono';
$password = isset($_SESSION['password']) ? htmlspecialchars($_SESSION['password']) : 'Nie ustawiono';

// Wyświetl dane profilu użytkownika
echo '<div class="container1">';
echo '<h1>Witaj, ' . htmlspecialchars($_SESSION['username']) . '!</h1>';
echo '<div class="profile-box">'; // Dodany kontener dla ramki
echo '<div class="profile-info">';
echo '<p><strong>Nazwa użytkownika:</strong> ' . htmlspecialchars($_SESSION['username']) . ' <button class="change-button">Zmień</button></p>';
echo '<p><strong>E-mail:</strong> ' . $email . ' <button class="change-button">Zmień</button></p>';
echo '<p><strong>Hasło:</strong> <span id="password-display">********</span> <button id="toggle-password" onclick="togglePassword()">👁️</button> <button class="change-button">Zmień</button></p>'; // Zasłonięte hasło
echo '</div>';
echo '</div>';
echo '<a class="logout-button" href="index.php?strona=login/logout">Wyloguj się</a>';
echo '</div>';
?>

<script>
function togglePassword() {
    var passwordDisplay = document.getElementById('password-display');
    var currentText = passwordDisplay.innerText;

    if (currentText === '********') {
        passwordDisplay.innerText = $password; // Zasady bezpieczeństwa - nie pokazuj hasła
    } else {
        passwordDisplay.innerText = '********'; // Zasłoń hasło
    }
}
</script>
</div>