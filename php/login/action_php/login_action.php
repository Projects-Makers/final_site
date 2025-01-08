<section>
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
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, username, password, rank FROM users WHERE email = ?");
    $stmt->bind_param("s", $email); // Powiąż parametr $email z zapytaniem
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashed_password, $rank); // Powiąż wynik z odpowiednimi zmiennymi
        $stmt->fetch();
    
        // Debugowanie: Sprawdź wartości
        echo '<pre>';
        var_dump($id, $username, $hashed_password, $rank);
        echo '</pre>';
    
        // Sprawdź hasło
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['rank'] = $rank;
            header("location: index.php?strona=section");
        } else {
            echo "Nieprawidłowe hasło.";
        }
    } else {
        echo "Użytkownik o podanym emailu nie istnieje.";
    }
    
    $stmt->close();
}
$conn->close();
?>
</section>