<?php

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}

$username = $_SESSION['username'];

$passowrd = $_SESSION['password'];
$rank = $_SESSION['rank'];

echo '<div class="profil-container">';
echo '<h1>Twoj profil</h1>';
if($rank==0){
    echo 'Uzytkownik';
}
else{
    echo'Administrator';
}
echo '<p>Witaj, ' . $username . '!</p>';
echo '<p>Twoje dane:</p>';
echo '<ul>';
echo '<li>Nazwa Uzytkownika: ' . $username . '</li>';
echo '<li>Hasło: **********</li>';
echo '</ul>';
if ($rank==1){
    echo '<a href=index.php?strona=admin><div class="admin-panel" >Panel Administracyjny</div></a>';
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
?>