let isHidden = false; // Flaga do śledzenia, czy obraz jest ukryty czy widoczny
let hasScrolled = false; // Flaga do śledzenia, czy użytkownik użył scrolla

const banner = document.querySelector('.baner-zdj');

// Funkcja do ukrywania/przywracania banneru
function toggleBanner() {
    if (!isHidden) {
        banner.style.transform = 'translateY(-80%)';
        banner.style.opacity = '0.5'; // Zmniejszenie widoczności
        isHidden = true; // Ustawienie flagi na ukryty
    } else {
        banner.style.transform = 'translateY(0)';
        banner.style.opacity = '1';
        isHidden = false; // Ustawienie flagi na widoczny
    }
}

// Zdarzenie kliknięcia
banner.addEventListener('click', function () {
    toggleBanner();
});

// Zdarzenie przewijania
window.addEventListener('scroll', function () {
        toggleBanner(); // Ukrywamy lub przywracamy banner
    
});
