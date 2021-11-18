let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 13.847860, lng: 100.604274 },
    zoom: 10,
  });
}