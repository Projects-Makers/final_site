<?php
session_start();
require("config.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php?strona=login/login");
    exit();
}

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>

<section>
    <div class="container">
        <h1>Profil użytkownika</h1>
        <p><strong>Username:</strong> <?php echo htmlspecialchars($user['username']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
        <a href="index.php?strona=login/logout">Wyloguj się</a>
    </div>
</section>