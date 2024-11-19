        function toggleMenu() {
            const menu = document.getElementById('menu');
            const hamburger = document.getElementById('hamburger');
            menu.classList.toggle('open');
            hamburger.classList.toggle('active'); // Poprawione z kropką
        }
        document.querySelector('.login-form').addEventListener('submit', function(e) {
            var email = document.getElementById('email').value;
        
            // Wyrażenie regularne dla walidacji e-maila
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var validEndings = ['.com', '.pl', '.org', '.net']; // Dodaj inne końcówki, które chcesz zaakceptować
        
            // Sprawdź, czy e-mail ma poprawny format
            if (!emailRegex.test(email)) {
                e.preventDefault();
                alert('Proszę podać prawidłowy adres e-mail.');
                return; // Zatrzymaj dalsze przetwarzanie
            }
        
            // Sprawdź, czy e-mail kończy się na dozwoloną końcówkę
            var hasValidEnding = validEndings.some(ending => email.endsWith(ending));
            if (!hasValidEnding) {
                e.preventDefault();
                alert('Proszę wpisać adres e-mail z poprawną końcówką (np. .com, .pl).');
            }
        });
        