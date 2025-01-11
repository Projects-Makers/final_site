<!DOCTYPE html>
<html lang="pl">
<head>
    <meta http-equiv="refresh" content="60">
    <script>
        setInterval(function() {
            location.reload();
        }, 60000); // 60000 to 1 minuta w milisekundach
    </script>
    <meta charset="UTF-8">
    <title>Śląsk</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/sidebar.css">
    <link rel="stylesheet" href="style/informacje.css">
    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="style/profil.css">
    <link rel="stylesheet" href="style/mapa.css">
</head>
<body>
<?php
if (!isset($_GET["strona"]))
    {$plik = 'srodek';}
else
  {$plik = $_GET["strona"];}

$roz = '.php';

$directory = 'php/';
include("php/login.php");

if($plik == 'srodek'){
}
include("php/sidebar.php");
echo '<section>';
include("$directory$plik$roz");

echo '</section>';
?>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<script src="javascript/baner.js"></script>
<script src="javascript/login_show.js"></script>
<script src="php/map.js"></script>

<?php
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $users = json_decode(file_get_contents('users.json'), true);
  if (isset($users[$username])) {
      if (isset($_SESSION['czas_wejscia'])) {
          $czas_spedzony = $users[$username]['czas_spedzony'];
          if (!isset($czas_spedzony)) {
              $czas_spedzony = 0;
          }
          $czas_spedzony += (time() - $_SESSION['czas_wejscia']) / 60;
          $users[$username]['czas_spedzony'] = round($czas_spedzony, 0);
          file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT));
          unset($_SESSION['czas_wejscia']);
      } else {
          $_SESSION['czas_wejscia'] = time();
      }
  }
}
// Zapisz czas wejscia do sesji
if (!isset($_SESSION['czas_wejscia'])) {
    $_SESSION['czas_wejscia'] = time();
}
?>
</body>
</html>
