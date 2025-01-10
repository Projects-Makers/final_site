
    <div class="form-container">
        <h2>Logowanie</h2>
        <form id="login-form">
            <label for="login-identifier">Email lub Nazwa użytkownika:</label>
            <input type="text" id="login-identifier" name="identifier" placeholder="Wpisz swój email lub nazwę użytkownika" required>

            <label for="login-password">Hasło:</label>
            <input type="password" id="login-password" name="password" placeholder="Wpisz swoje hasło" required>

            <button type="submit">Zaloguj się</button>
        </form>
        <div class="toggle">
            Nie masz konta? <a href="#" onclick="showRegisterForm()">Zarejestruj się</a>
        </div>
    </div>

    <script>
        function showRegisterForm() {
            document.querySelector('.form-container').innerHTML = `
                <h2>Rejestracja</h2>
                <form id="register-form">
                    <label for="register-username">Nazwa użytkownika:</label>
                    <input type="text" id="register-username" name="username" placeholder="Wpisz nazwę użytkownika" required>

                    <label for="register-email">Email:</label>
                    <input type="email" id="register-email" name="email" placeholder="Wpisz swój email" required>

                    <label for="register-password">Hasło:</label>
                    <input type="password" id="register-password" name="password" placeholder="Wpisz swoje hasło" required>

                    <button type="submit">Zarejestruj się</button>
                </form>
                <div class="toggle">
                    Masz już konto? <a href="#" onclick="showLoginForm()">Zaloguj się</a>
                </div>
            `;
        }

        function showLoginForm() {
            document.querySelector('.form-container').innerHTML = `
                <h2>Logowanie</h2>
                <form id="login-form">
                    <label for="login-identifier">Email lub Nazwa użytkownika:</label>
                    <input type="text" id="login-identifier" name="identifier" placeholder="Wpisz swój email lub nazwę użytkownika" required>

                    <label for="login-password">Hasło:</label>
                    <input type="password" id="login-password" name="password" placeholder="Wpisz swoje hasło" required>

                    <button type="submit">Zaloguj się</button>
                </form>
                <div class="toggle">
                    Nie masz konta? <a href="#" onclick="showRegisterForm()">Zarejestruj się</a>
                </div>
            `;
        }
    </script>

