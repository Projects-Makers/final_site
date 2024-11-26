document.addEventListener('DOMContentLoaded', function () {
    const image = document.getElementById('clickable-image');
    const redObject = document.getElementById('red-object');
    const closeButton = document.getElementById('close-button');

    // Obsługa kliknięcia na obrazek
    image.addEventListener('click', function () {
        redObject.classList.add('active'); // Ustawia klasę "active" na #red-object
    });

    // Obsługa kliknięcia na przycisk zamknięcia
    closeButton.addEventListener('click', function () {
        redObject.classList.remove('active'); // Usuwa klasę "active" z #red-object
    });
});
