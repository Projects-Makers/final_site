

<?php
include("php/sidebar.php");
?>

    <!-- Główna sekcja - formularz rejestracji -->
    <section>
        <div class="container">
            <div class="register-container">
                <h1>Zaloguj się</h1>
                <form action="index.php?strona=login/action_php/login_action" method="post" class="login-form">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
    
                    <label for="username">Nazwa użytkownika:</label>
                    <input type="text" id="username" name="username" required>
    
                    <label for="password">Hasło:</label>
                    <input type="password" id="password" name="password" required>
    
                    <button type="submit" class="btn">Zaloguj się</button>
                    <p><a href="index.php?strona=login/register">Zarejestruj się</a></p>
                    <p><a href="index.php?strona=login/forgot_password">Zapomniałem hasła</a></p> <!-- Link do opcji zapomnienia hasła -->
                </form>
            </div>
        </div>
</section>


    <script src="../javascript/login.js"></script>
    
