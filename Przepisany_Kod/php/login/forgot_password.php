<section>
    <div class="container">
        <div class="forgot-container">
            <h1>Resetuj hasło</h1>
            <form action="index.php?strona=login/action_php/reset_password_action" method="post" class="reset-password-form">
                <label for="email">Podaj swój adres email:</label>
                <input type="email" id="email" name="email" required>

                <button type="submit" class="btn">Wyślij link resetujący</button>
                <p><a href="index.php?strona=login/login">Powrót do logowania</a></p>
            </form>
        </div>
    </div>
</section>
