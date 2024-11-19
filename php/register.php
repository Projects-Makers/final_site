
   

    <!-- Główna sekcja - formularz rejestracji -->
    <div id="main">
        <div class="container">
            <div class="register-container">
                <h1>Rejestracja</h1>
                <form action="register_process.php" method="post" class="register-form">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Proszę podać prawidłowy adres e-mail (np. example@domain.com)">
    
                    <label for="username">Nazwa użytkownika:</label>
                    <input type="text" id="username" name="username" required>
    
                    <label for="password">Hasło:</label>
                    <input type="password" id="password" name="password" required minlength="8" pattern="(?=.*[!@#$%^&*]).{8,}" title="Hasło musi zawierać co najmniej 8 znaków oraz przynajmniej jeden znak specjalny.">
    
                    <div class="terms-checkbox">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">Akceptuję <a href="#" id="termsLink">warunki użytkowania</a></label>
                    </div>

                    <button type="submit" class="btn">Zarejestruj się</button>
                    <p>Masz już konto? <a href="index.php?strona=php/login">Zaloguj się</a></p>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal z warunkami użytkowania -->
    <div id="termsModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Warunki Użytkowania</h2>
            <p>Witamy w serwisie Śląsk. Korzystając z naszej strony, zgadzasz się przestrzegać poniższych warunków:</p>
            <ol>
                <li>Akceptacja Warunków: Korzystając z naszej strony, akceptujesz niniejsze warunki w całości.</li>
                <li>Prywatność: Szanujemy Twoją prywatność. Szczegóły znajdziesz w naszej Polityce Prywatności.</li>
                <li>Konto Użytkownika: Jesteś odpowiedzialny za zachowanie poufności swojego konta i hasła.</li>
                <li>Treści Użytkownika: Nie wolno publikować treści nielegalnych, obraźliwych lub naruszających prawa innych.</li>
                <li>Prawa Autorskie: Szanuj prawa autorskie. Nie publikuj treści, do których nie masz praw.</li>
                <li>Zmiany w Serwisie: Zastrzegamy sobie prawo do modyfikacji lub zakończenia świadczenia usług w dowolnym momencie.</li>
                <li>Odpowiedzialność: Korzystasz z serwisu na własne ryzyko. Nie ponosimy odpowiedzialności za szkody wynikłe z korzystania z serwisu.</li>
                <li>Jurysdykcja: Niniejsze warunki podlegają prawu polskiemu.</li>
            </ol>
            <p>Korzystając z naszego serwisu, potwierdzasz, że przeczytałeś, zrozumiałeś i zgadzasz się przestrzegać tych warunków.</p>
        </div>
    </div>


    <!-- JavaScript -->
     <script>
        function toggleMenu() {
    const menu = document.getElementById('menu');
    const hamburger = document.getElementById('hamburger');
    menu.classList.toggle('open');
    hamburger.classList.toggle('active');
}

document.querySelector('.register-form').addEventListener('submit', function(e) {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var terms = document.getElementById('terms').checked;
    var emailRegex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
    var passwordRegex = /^(?=.*[!@#$%^&*]).{8,}$/;
    var validEndings = ['.com', '.pl', '.org', '.net']; // Dodaj inne końcówki, które chcesz zaakceptować
    var hasValidEnding = validEndings.some(ending => email.endsWith(ending));
    
    if (!hasValidEnding) {
        e.preventDefault();
        alert('Proszę wpisać adres e-mail z poprawną końcówką (np. .com, .pl).');
    }
    
    if (!emailRegex.test(email)) {
        e.preventDefault();
        alert('Proszę podać prawidłowy adres e-mail.');
    }
    
    if (!passwordRegex.test(password)) {
        e.preventDefault();
        alert('Hasło musi zawierać co najmniej 8 znaków oraz przynajmniej jeden znak specjalny.');
    }

    if (!terms) {
        e.preventDefault();
        alert('Proszę zaakceptować warunki użytkowania.');
    }
});

// Pobierz elementy modalu
var modal = document.getElementById("termsModal");
var link = document.getElementById("termsLink");
var span = document.getElementsByClassName("close")[0];

// Gdy użytkownik kliknie link, otwórz modal
link.onclick = function(event) {
    event.preventDefault(); // Zapobiega przekierowaniu
    modal.style.display = "block";
}

// Gdy użytkownik kliknie (x), zamknij modal
span.onclick = function() {
    modal.style.display = "none";
}

// Gdy użytkownik kliknie gdziekolwiek poza modalem, zamknij go
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    
</body>
</html>