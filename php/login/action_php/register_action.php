<?php

// Połączenie z bazą danych
$host = 'localhost';
$db = 'miasta';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Połączenie nieudane: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (email, username, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $username, $hashed_password);

    if ($stmt->execute()) {
        header("Location: index.php?strona=login/login")
    } else {
        echo "Błąd: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>