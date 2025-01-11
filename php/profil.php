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
// Formularz do edytowania zdjęcia
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

// Wyświetlanie pozostałych danych użytkownika
echo '<p>Witaj, ' . $username . '!</p>';
echo '<p><h3>Twoje dane:</h3></p>';
echo '<ul>';
echo '<li>Login: ' . $username . '</li>';
echo '<li>Hasło: **********</li>';
echo '</ul>';

echo '<h3>Statystyki:</h3>';
echo '<ul>';
echo '<li>Liczba postów: 10</li>';
echo '<li>Liczba komentarzy: 20</li>';
echo '<li>Czas spędzony na stronie: ' . $users[$username]['czas_spedzony'] . ' minut</li>';
echo '</ul>';

if ($rank == 1) {
    echo '<a href="index.php?strona=admin"><div class="admin-panel">Panel Administracyjny</div></a>';
}

echo '<form method="post">';
echo '<button class="wyloguj-button" name="wyloguj">Wyloguj się</button>';
echo '</form>';

if (isset($_POST['wyloguj'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}
echo '</div>';
ob_end_flush();
?>
