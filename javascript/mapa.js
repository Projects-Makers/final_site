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

document.addEventListener('DOMContentLoaded', function () {
    const map = L.map('map').setView([50.2649, 19.0238], 13); // Ustaw współrzędne i zoom

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap'
    }).addTo(map);

  
});