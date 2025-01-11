document.addEventListener('DOMContentLoaded', function () {
    const mapButton = document.querySelector('.mapa-button');
    const mapModal = document.getElementById('mapModal');
    const closeButton = document.querySelector('.close-button');
    let mapInitialized = false;
    let map; // Zmienna na obiekt mapy

    // Funkcja inicjalizująca mapę
    function initializeMap() {
        map = L.map('map', {
            center: [50.2649, 19.0238], // Środek woj. śląskiego
            zoom: 10,
            maxZoom: 13,
            minZoom: 6,
            maxBounds: L.latLngBounds([49.5, 17.5], [51.5, 20.5]) // Granice dla regionu
        });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap'
        }).addTo(map);
    }

    // Pokazanie modala z mapą
    mapButton.addEventListener('click', function () {
        mapModal.style.display = 'block';

        if (!mapInitialized) {
            initializeMap();
            mapInitialized = true;
        }

        // Aktualizacja rozmiaru mapy po otwarciu modala
        setTimeout(() => {
            map.invalidateSize();
        }, 100);
    });

    // Zamykanie modala
    closeButton.addEventListener('click', function () {
        mapModal.style.display = 'none';
    });

    // Zamykanie modala po kliknięciu poza jego treścią
    window.addEventListener('click', function (event) {
        if (event.target === mapModal) {
            mapModal.style.display = 'none';
        }
    });
});
