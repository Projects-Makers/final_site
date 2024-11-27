<?php
session_start();
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
        // Ustaw sesję
        session_start();
        $_SESSION['username'] = $username;

<<<<<<< HEAD
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
        } else {
            echo "Nieprawidłowe hasło.";
        }
=======
        // Zwróć odpowiedź JSON
        echo json_encode(['status' => 'success']);
>>>>>>> c4d73fa63ccef85525883816bcbd0a79d9d1e352
    } else {
        echo json_encode(['status' => 'error', 'message' => $stmt->error]);
    }

    $stmt->close();
}
$conn->close();
?>