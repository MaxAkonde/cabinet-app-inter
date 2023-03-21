function initMap(adresse,zoom=16) {
    Tmp = adresse.split('|');
    Lon = parseFloat(Tmp[1]);
    Lat = parseFloat(Tmp[0]);
    if (Lon && Lat) {
        Coord = [parseFloat(Lat),parseFloat(Lon)];
        var mymap = L.map('Map').setView(Coord, zoom);

        var OpenStreetMap_France = L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            maxZoom: 20,
            attribution: '&copy; Openstreetmap France | &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(mymap);
        var marker = L.marker(Coord).addTo(mymap);
    } else {
    $.get('https://nominatim.openstreetmap.org/search?q='+adresse+'&format=json&polygon=0&addressdetails=0', function(res) {
            Coord = [parseFloat(res[0].lat),parseFloat(res[0].lon)];
            var mymap = L.map('Map').setView(Coord, zoom);
    
            var OpenStreetMap_France = L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                maxZoom: 20,
                attribution: '&copy; Openstreetmap France | &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(mymap);
            var marker = L.marker(Coord).addTo(mymap);
        }, 'json');
    }
    }