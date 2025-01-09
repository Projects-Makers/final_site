let isHidden = false; // Flaga do śledzenia, czy obraz jest ukryty czy widoczny

document.querySelector('.baner-zdj').addEventListener('click', function () {
    const banner = this;

    if (!isHidden) {
        // Ukrywanie o 80%
        banner.style.transform = 'translateY(-80%)';
        banner.style.opacity = '0.5'; // Zmniejszenie widoczności
        isHidden = true; // Ustawienie flagi na ukryty
    } else {
        // Przywracanie do pełnej widoczności
        banner.style.transform = 'translateY(0)';
        banner.style.opacity = '1';
        isHidden = false; // Ustawienie flagi na widoczny
    }
});
