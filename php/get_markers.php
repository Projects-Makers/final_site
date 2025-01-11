<?php
$host = 'localhost'; // Adres serwera MySQL
$dbname = 'slask'; // Nazwa bazy danych
$username = 'root'; // Nazwa użytkownika MySQL
$password = ''; // Hasło MySQL

try {
    // Połączenie z bazą danych
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Zapytanie SQL pobierające dane z tabeli
    $stmt = $pdo->query("SELECT lat, lng, description FROM miasta");
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Zwrócenie danych w formacie JSON
    header('Content-Type: application/json');
    echo json_encode($data);
} catch (PDOException $e) {
    echo 'Błąd połączenia: ' . $e->getMessage();
}
?>
