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

    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
      
        } else {
            echo "Nieprawidłowe hasło.";
        }
    } else {
        echo "Nie znaleziono użytkownika o podanym adresie email.";
    }

    $stmt->close();
}
$conn->close();
?>
    <div class="img">
    <center>
    <img src="pic/mapa.png" width="700px" height="800px" id="clickable-image">
    </center>
    <div id="red-object" class="hidden"></div>
    <script src="javascript/mapa.js"></script>
    </div>
</section>