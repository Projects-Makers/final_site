<?php
header('Content-Type: application/json');

$host = 'localhost';
$dbname = 'slask';
$username = 'root';
$password = '';

try {
    // Połączenie z bazą danych
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Zapytanie SQL
    $stmt = $pdo->query("SELECT lat, lng, description FROM miasta");
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Jeśli dane są dostępne, zwróć je w formacie JSON
    if ($data) {
        echo json_encode($data);
    } else {
        echo json_encode([]); // Jeśli brak danych, zwróć pustą tablicę
    }
} catch (PDOException $e) {
    echo json_encode(["error" => "Błąd połączenia z bazą danych: " . $e->getMessage()]);
}
?>
