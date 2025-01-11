<?php
session_start();

// Zmienna do przechowywania komunikatów
$message = "";

// Logowanie użytkownika
if (isset($_POST['login']) && isset($_POST['password'])) {
    $username = $_POST['login'];
    $password = $_POST['password'];

    if (login($username, $password)) {
        header('Location: index.php');
        exit;
    } else {
        $message = "Nieprawidłowy login lub hasło!";
    }
}

// Rejestracja użytkownika
if (isset($_POST['register'])) {
    $username = $_POST['reg_username'];
    $password = $_POST['reg_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password === $confirm_password) {
        // Sprawdź, czy użytkownik już istnieje
        $users = json_decode(file_get_contents('users.json'), true);
        if (isset($users[$username])) {
            $message = "Użytkownik o tej nazwie już istnieje!";
        } else {
            // Zapisz nowego użytkownika
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $users[$username] = ['username' => $username, 'password' => $hashed_password, 'rank' => 0, 'czas_spedzony' =>0];
            file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));
            $message = "Rejestracja przebiegła pomyślnie! Możesz się teraz zalogować.";
        }
    } else {
        $message = "Hasła muszą być takie same!";
    }
}

function login($username, $password) {
    // Upewnij się, że sesja jest uruchomiona
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $users = json_decode(file_get_contents('users.json'), true);
    if (isset($users[$username]) && password_verify($password, $users[$username]['password'])) {
        $_SESSION['username'] = $username; // Zapisanie loginu do sesji
        $_SESSION['rank'] = $users[$username]['rank'];
        return true;
    }
    return false;
}
?>

        <div class="form-container" id="login-form-container">
            <h2>Logowanie</h2>
            <form method="POST" action="index.php" id="login-form">
                <input type="text" name="login" placeholder="Login" required>
                <input type="password" name="password" placeholder="Hasło" required>
                <button type="submit">Zaloguj się</button>
            </form>
            <div class="toggle">
            Nie masz konta? <a href="#" onclick="showRegisterForm()">Zarejestruj się</a>
            </div>
            <!-- Komunikat -->
            <?php if ($message): ?>
                <p style="color: red;"><?php echo $message; ?></p>
            <?php endif; ?>
        </div>
            <!-- Formularz rejestracji -->
        <div class="form-container" id="register-form-container">
                <h2>Rejestracja</h2>
                <form method="POST" action="index.php">
                    <input type="text" name="reg_username" placeholder="Nazwa użytkownika" required>
                    <input type="password" name="reg_password" placeholder="Hasło" required>
                    <input type="password" name="confirm_password" placeholder="Potwierdź hasło" required>
                    <button type="submit" name="register" class="category-btn">Zarejestruj się</button>
                </form>
                <div class="toggle">
                Masz już konto? <a href="#" onclick="showLoginForm()">Zaloguj się</a>
                </div>
            </div>
        </div>
