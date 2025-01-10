document.addEventListener('DOMContentLoaded', function () {
    const map = L.map('map', {
        center: [50.2649, 19.0238],
        zoom: 10,
        maxZoom: 13,
        minZoom: 6,
        maxBounds: L.latLngBounds([49.5, 17.5], [51.5, 20.5]) // set bounding box for Silesian region
      });

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap'
    }).addTo(map);

    var markers = [
        {
          lat: 50.2649,
          lng: 19.0238,
          title: 'Katowice',
          url: 'index.php?strona=podstrona-miasta&id=43'
        },
        {
          lat: 50.2944,
          lng: 18.6717,
          title: 'Gliwice',
          url: 'index.php?strona=podstrona-miasta&id=44'
        },
        // Add more markers here...
      ];
      
      markers.forEach(function(marker) {
        var markerObject = L.marker([marker.lat, marker.lng], {
          title: marker.title
        }).addTo(map);
      
        markerObject.on('click', function() {
          window.location.href = marker.url;
        });
      });
});



// Wybierz elementy
const mapa = document.getElementById('map');
const mapaButton = document.querySelector('mapa-button');

// Funkcja, która przesuwa mapę na top: 200px
function moveMapToTop() {
    mapa.style.top = '200px'; // Ustawienie mapy na top: 200px
}

// Nasłuchiwanie na kliknięcie przycisku w sidebarze
mapaButton.addEventListener('click', function() {
    moveMapToTop(); // Wywołanie funkcji, gdy przycisk zostanie kliknięty
});