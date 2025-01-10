<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geolocalizacion</title>
</head>

<body>
    <style>
        #mapa {
            height: 500px;
            width: 100%;
        }
    </style>
    <h1>Mi ubicacion</h1>
    <button id="btn">Obtener Mi ubicacion</button>
    <p id="info"></p>
    <div id="mapa"></div>
    <script src="js/geolocaliza.js"></script>
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJDyvGRVvQjPZWQi0nkExVnjpupdD0-so&callback=initMap">
    </script>
</body>

</html>