const loginFormContainer = document.getElementById('login-form-container');
        const registerFormContainer = document.getElementById('register-form-container');
        const kontoDiv = document.querySelector('.konto'); // Używamy querySelector, aby wybrać elementy po klasie

        // Funkcja, która pokazuje formularz logowania
        function showLoginForm() {
            loginFormContainer.classList.add('show'); // Pokazujemy formularz logowania
            registerFormContainer.classList.remove('show'); // Ukrywamy formularz rejestracji
        }

        // Funkcja, która pokazuje formularz rejestracji
        function showRegisterForm() {
            registerFormContainer.classList.add('show'); // Pokazujemy formularz rejestracji
            loginFormContainer.classList.remove('show'); // Ukrywamy formularz logowania
        }

        // Dodanie nasłuchiwania kliknięcia na div konto (z klasą konto)
        kontoDiv.addEventListener('click', function() {
            if (loginFormContainer.classList.contains('show') || registerFormContainer.classList.contains('show')) {
                // Jeśli któryś formularz jest widoczny, ukrywamy go
                loginFormContainer.classList.remove('show');
                registerFormContainer.classList.remove('show');
            } else {
                // Jeśli żaden formularz nie jest widoczny, pokazujemy formularz logowania
                showLoginForm();
            }
        });

        // Inicjalizacja: formularz jest ukryty na początku, nic nie jest pokazane
    