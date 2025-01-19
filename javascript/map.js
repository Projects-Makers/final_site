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
            minZoom: 9,
            maxBounds: L.latLngBounds([49.5, 17.5], [51.5, 20.5]) // Granice dla regionu
        });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap'
        }).addTo(map);

        // Pobierz dane z serwera i dodaj markery
        fetchMarkersFromDatabase();
    }

    // Funkcja pobierająca markery z bazy danych
    function fetchMarkersFromDatabase() {
        fetch('php/get_markers.php')
            .then(response => {
                if (!response.ok) {
                    throw new Error(`Błąd sieci: ${response.status}`);
                }
                return response.json(); // Oczekujemy danych w formacie JSON
            })
            .then(data => {
                if (Array.isArray(data) && data.length > 0) {
                    data.forEach(marker => {
                        const { lat, lng, description, name, id_miasta } = marker;

                        if (lat && lng) {
                            const mapMarker = L.marker([lat, lng]).addTo(map);

                            const moreInfoLink = `index.php?strona=informacje&nr=${id_miasta}`;

                            mapMarker.bindPopup(`
                                <div class="popup-content">
                                    <h2>${name}</h2>
                                    <h3>${description}</h3>
                                    <a href="${moreInfoLink}"><div class="view">Więcej informacji</div></a>
                                </div>
                            `);

                            // Dodaj obsługę kliknięcia na marker
                            mapMarker.on('click', function () {
                                map.setView([lat, lng], 13, { animate: true }); // Przybliż na marker z animacją
                            });
                        } else {
                            console.error(`Nieprawidłowe dane markera: ${JSON.stringify(marker)}`);
                        }
                    });
                } else {
                    console.warn('Brak danych markerów w bazie.');
                }
            })
            .catch(error => console.error('Błąd podczas pobierania markerów:', error));
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
