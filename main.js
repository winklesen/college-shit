let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -6.356635, lng: 106.834512 },
    zoom: 16,
  });
}

window.initMap = initMap;