// Zmiana motywu jasnego/ciemnego

const themeSelector = document.getElementById('theme-selector'); // Pobierz select z motywem

// Sprawdzanie motywu przy załadowaniu strony
const savedTheme = localStorage.getItem('theme'); // Pobierz zapisany motyw z localStorage
if (savedTheme) {
    document.documentElement.setAttribute('data-theme', savedTheme); // Zastosuj zapisany motyw
    themeSelector.value = savedTheme; // Ustaw wybrany motyw w selectorze
}

// Obsługa zmiany motywu przez wybór z listy
themeSelector.addEventListener('change', (event) => {
    const selectedTheme = event.target.value; // Pobierz wybrany motyw

    // Zmiana motywu
    document.documentElement.setAttribute('data-theme', selectedTheme);
    localStorage.setItem('theme', selectedTheme); // Zapisz nowy motyw
});