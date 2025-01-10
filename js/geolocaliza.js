let map;
async function initMap(){
    const position = {lat:0, lng:0 };
    const {Map} = await google.maps.importLibrary("maps");
    const {AdvanceMarkerElement} = await google.maps.importLibrary("marker");

    map = new Map(document.getElementById("mapa"),{
        zoom: 4,
        center: position,
    });
}
window.initMap = initMap;

function obtenerUbicacion(){
    navigator.geolocation.getCurrentPosition(function(position){
        const lat = position.coords.latitude;
        const lng = position.coords.longitude;
        document.getElementById("info").textContent = `latutud:${lat} - longitud:${lng}`;
    }, function(error){
        console.log(`Error:${error}`)
    });
}
document.getElementById("btn").addEventListener("click",obtenerUbicacion);