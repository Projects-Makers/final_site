<?php

ob_start();
$users = json_decode(file_get_contents('users.json'), true);

$username = $_SESSION['username'];
$rank = $_SESSION['rank'];
$zdjecie_profilowe_path = isset($users[$username]['zdjecie_profilowe']) ? $users[$username]['zdjecie_profilowe'] : null;

// Obsługa przesyłania zdjęcia profilowego
echo '<div class="profil-container">';
echo '<h1>Twój profil</h1>';

// Wyświetlanie zdjęcia profilowego z możliwością edycji
if ($zdjecie_profilowe_path) {
    echo '<div class="zdjecie-profilowe" style="position: relative;">';
    echo '<img src="' . $zdjecie_profilowe_path . '" alt="Zdjęcie profilowe" style="cursor: pointer;" onclick="document.getElementById(\'edit-photo-form\').style.display=\'block\'">';
    echo '</div>';
} else {
    echo '<form method="POST" enctype="multipart/form-data">';
    echo '<label for="zdjecie_profilowe">Dodaj zdjęcie profilowe:</label>';
    echo '<input type="file" name="zdjecie_profilowe" id="zdjecie_profilowe" required>';
    echo '<button type="submit">Zapisz</button>';
    echo '</form>';
}

// Obsługa formularza zmiany zdjęcia
echo '<form id="edit-photo-form" method="POST" enctype="multipart/form-data" style="display: none;">';
echo '<label for="zdjecie_profilowe_edit">Zmień zdjęcie profilowe:</label>';
echo '<input type="file" name="zdjecie_profilowe" id="zdjecie_profilowe_edit" required>';
echo '<button type="submit">Zapisz nowe zdjęcie</button>';
echo '</form>';

if ($rank == 0) {
    echo '<p class="rank-0">Użytkownik</p>';
} else {
    echo '<p class="rank-1">Administrator</p>';
}

// Wyświetlanie danych użytkownika
echo '<p>Witaj, ' . $username . '!</p>';
echo '<p><h3>Twoje dane:</h3></p>';
echo '<ul>';
echo '<li>Nazwa uzytkownika: ' . $username . ' <button type="button" onclick="toggleNicknameForm()" class="btn-edit">Edytuj</button></li>';
echo '</ul>';

// Formularz zmiany nazwy użytkownika
echo '<div id="nickname-change-form" style="display: none;">';
echo '<h3>Zmień nazwę użytkownika</h3>';
echo '<form method="POST" action="">';
echo '<label for="new_nickname">Nowa nazwa użytkownika:</label>';
echo '<input type="text" name="new_nickname" id="new_nickname" required>';
echo '<button type="submit" name="change_nickname">Zmień nazwę</button>';
echo '</form>';
echo '</div>';

// Formularz zmiany hasła
echo '<ul>';
echo '<li>Hasło: ********** <button type="button" onclick="togglePasswordForm()" class="btn-logout">Edytuj</button></li>';
if (isset($_POST['change_password'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_new_password = $_POST['confirm_new_password'];

    // Sprawdzanie, czy aktualne hasło jest poprawne
    if (password_verify($current_password, $users[$username]['password'])) {
        // Sprawdzanie, czy nowe hasło jest takie same
        if ($new_password === $confirm_new_password) {
            // Aktualizacja hasła
            $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);
            $users[$username]['password'] = $hashed_new_password;
            file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));
            echo '<p style="color: green;">Hasło zostało zmienione pomyślnie!</p>';
        } else {
            echo '<p style="color: red;">Nowe hasła muszą być takie same!</p>';
        }
    } 
}
echo '</ul>';
echo '<div id="password-change-form" style="display: none;">';
echo '<h3>Zmień hasło</h3>';
echo '<form method="POST" action="">';
echo '<label for="current_password">Aktualne hasło:</label>';
echo '<input type="password" name="current_password" id="current_password" required>';
echo '<label for="new_password">Nowe hasło:</label>';
echo '<input type="password" name="new_password" id="new_password" required>';
echo '<label for="confirm_new_password">Potwierdź nowe hasło:</label>';
echo '<input type="password" name="confirm_new_password" id="confirm_new_password" required>';
echo '<button type="submit" name="change_password">Zmień hasło</button>';
echo '</form>';
echo '</div>';

echo '<h3>Statystyki:</h3>';
echo '<ul>';
echo '<li>Liczba postów: 10</li>';
echo '<li>Liczba komentarzy: 20</li>';
echo '<li>Czas spędzony na stronie: ' . $users[$username]['czas_spedzony'] . ' minut</li>';
echo '</ul>';

if ($rank == 1) {
    echo '<a href="index.php?strona=admin"><div class="admin-panel">Panel Administracyjny</div></a>';
}

// Wylogowanie
echo '<form method="post" class="2">';
echo '<button class="wyloguj-button" name="wyloguj">Wyloguj się</button>';
echo '</form>';

if (isset($_POST['wyloguj'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}

echo '</div>';

if (isset($_POST['change_nickname'])) {
    $new_nickname = $_POST['new_nickname'];

    // Sprawdzanie, czy nazwa użytkownika już istnieje
    if (isset($users[$new_nickname])) {
        echo '<p style="color: red;">Nazwa użytkownika już istnieje. Wybierz inną.</p>';
    } else {
        // Zmiana nazwy użytkownika
        $users[$new_nickname] = $users[$username];
        unset($users[$username]);
        $_SESSION['username'] = $new_nickname; // Aktualizacja sesji

        file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));
        echo '<p style="color: green;">Nazwa użytkownika została zmieniona pomyślnie!</p>';
        header("Refresh: 0.1; url=index.php?strona=profil");
    }
}

if (isset($_POST['change_password'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_new_password = $_POST['confirm_new_password'];

    // Sprawdzanie, czy aktualne hasło jest poprawne
    if (password_verify($current_password, $users[$username]['password'])) {
        // Sprawdzanie, czy nowe hasło jest takie same
        if ($new_password === $confirm_new_password) {
            // Aktualizacja hasła
            $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);
            $users[$username]['password'] = $hashed_new_password;
            file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));
            echo '<p style="color: green;">Hasło zostało zmienione pomyślnie!</p>';
        } else {
            echo '<p style="color: red;">Nowe hasła muszą być takie same!</p>';
        }
    }
}

// Obsługa dodawania zdjęcia profilowego
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['zdjecie_profilowe'])) {
    $zdjecie_profilowe = $_FILES['zdjecie_profilowe'];
    $zdjecie_profilowe_tmp = $zdjecie_profilowe['tmp_name'];
    $zdjecie_profilowe_type = $zdjecie_profilowe['type'];
    $zdjecie_profilowe_size = $zdjecie_profilowe['size'];
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];

    // Upewnij się, że folder istnieje
    $upload_dir = __DIR__ . '/zdjecia_profilowe';
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Walidacja pliku
    if (in_array($zdjecie_profilowe_type, $allowed_types) && $zdjecie_profilowe_size <= 2000000) {
        $ext = pathinfo($zdjecie_profilowe['name'], PATHINFO_EXTENSION);
        $zdjecie_profilowe_path = 'zdjecia_profilowe/' . $username . '.' . $ext;
        if (move_uploaded_file($zdjecie_profilowe_tmp, $zdjecie_profilowe_path)) {
            $users[$username]['zdjecie_profilowe'] = $zdjecie_profilowe_path;
            file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));
            header("Refresh: 0.1; url=index.php?strona=profil");
        } else {
            echo "Błąd podczas przesyłania pliku.";
        }
    } else {
        echo "Nieprawidłowy typ pliku lub za duży rozmiar.";
    }
}

ob_end_flush();

?>

<script>
function toggleNicknameForm() {
    var form = document.getElementById('nickname-change-form');
    form.style.display = form.style.display === 'none' ? 'block' : 'none';
}

function togglePasswordForm() {
    var form = document.getElementById('password-change-form');
    form.style.display = form.style.display === 'none' ? 'block' : 'none';
}
</script>
