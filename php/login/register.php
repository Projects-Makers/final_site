
   

    <!-- Główna sekcja - formularz rejestracji -->
    <section>
        <div class="container">
            <div class="register-container">
                <h1>Rejestracja</h1>
                <form action="index.php?strona=login/action_php/register_action" method="post" class="login-form">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Proszę podać prawidłowy adres e-mail (np. example@domain.com)">
    
                    <label for="username">Nazwa użytkownika:</label>
                    <input type="text" id="username" name="username" required>
    
                    <label for="password">Hasło:</label>
                    <input type="password" id="password" name="password" required minlength="8" pattern="(?=.*[!@#$%^&*]).{8,}" title="Hasło musi zawierać co najmniej 8 znaków oraz przynajmniej jeden znak specjalny.">
    
                    <div class="terms-checkbox">
                        
                        <label for="terms">Akceptuję <a href="#" id="termsLink">warunki użytkowania</a></label>
                        <input type="checkbox" id="terms" name="terms" required>
                    </div>

                    <button type="submit" class="btn">Zarejestruj się</button>
                    <p>Masz już konto? <a href="index.php?strona=login/login">Zaloguj się</a></p>
                </form>
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
        <li>Bezpieczeństwo: Nie próbuj uzyskać nieautoryzowanego dostępu do serwisu lub jego zasobów.</li>
        <li>Spam: Zabronione jest wysyłanie spamu, wiadomości marketingowych bez zgody odbiorcy.</li>
        <li>Reklamy: Nie wolno publikować reklam bez naszej zgody.</li>
        <li>Zakupy: Wszelkie zakupy w serwisie podlegają dodatkowym warunkom sprzedaży.</li>
        <li>Ograniczenia Wiekowe: Aby korzystać z serwisu, musisz mieć ukończone 18 lat, chyba że posiadasz zgodę rodzica.</li>
        <li>Zachowanie Online: Użytkownicy muszą zachowywać się w sposób uprzejmy i szanujący innych.</li>
        <li>Linki Zewnętrzne: Nie ponosimy odpowiedzialności za treści zewnętrznych stron, do których prowadzą linki w naszym serwisie.</li>
        <li>Zmiany Warunków: Możemy aktualizować te warunki w dowolnym momencie bez wcześniejszego powiadomienia.</li>
        <li>Usunięcie Konta: Zastrzegamy sobie prawo do usunięcia konta w przypadku naruszenia warunków użytkowania.</li>
        <li>Zawieszenie Usług: Możemy zawiesić działanie serwisu z przyczyn technicznych, prawnych lub operacyjnych.</li>
        <li>Płatności: Wszystkie płatności dokonane za usługi są ostateczne i nie podlegają zwrotowi, chyba że wskazano inaczej.</li>
        <li>Wsparcie Techniczne: Oferujemy wsparcie techniczne tylko w zakresie opisanym w sekcji Pomoc.</li>
        <li>Rozwiązywanie Sporów: W przypadku sporu wszelkie kwestie będą rozstrzygane przed sądem właściwym dla naszej siedziby.</li>
        <li>Własność Intelektualna: Wszystkie treści w serwisie są chronione prawami autorskimi i nie mogą być kopiowane bez naszej zgody.</li>
        <li>Zgłoszenia Naruszeń: Użytkownicy powinni zgłaszać naruszenia warunków użytkowania za pomocą formularza kontaktowego.</li>
        <li>Dostępność Usług: Nie gwarantujemy, że serwis będzie dostępny w sposób ciągły i bez przerw.</li>
    </ol>
    <p>Korzystając z naszego serwisu, potwierdzasz, że przeczytałeś, zrozumiałeś i zgadzasz się przestrzegać tych warunków.</p>
</div>

    </div>

    
</body>
</section>
</html>