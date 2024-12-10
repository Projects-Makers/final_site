

document.addEventListener('DOMContentLoaded', function () {
    const map = L.map('map', {
        center: [50.2649, 19.0238],
        zoom: 13,
        
        maxZoom: 10,
        maxBounds: L.latLngBounds([49.5, 18.5], [51.5, 20.5]) // set bounding box for Silesian region
      });

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 10,
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

