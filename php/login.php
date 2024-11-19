

 

    <!-- Główna sekcja - formularz rejestracji -->
    <div id="main">
        <div class="container">
            <div class="register-container">
                <h1>Zaloguj się</h1>
                <form action="register_process.php" method="post" class="register-form">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
    
                    <label for="username">Nazwa użytkownika:</label>
                    <input type="text" id="username" name="username" required>
    
                    <label for="password">Hasło:</label>
                    <input type="password" id="password" name="password" required>
    
                    <button type="submit" class="btn">Zaloguj się</button>
                    <p><a href="index.php?strona=php/register">Zarejestruj się</a></p>
                    <p><a href="index.php?strona=php/forgot_password">Zapomniałem hasła</a></p> <!-- Link do opcji zapomnienia hasła -->
                </form>
            </div>
        </div>
    </div>
    
