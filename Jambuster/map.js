// Function to initialize the map



function initMap() {
    // Coordinates for the center of the map
    var center = { lat: 28.7041, lng: 77.1025 }; // Example: New York City

    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
      center: center,
      zoom: 12 // Set the initial zoom level
    });

    // You can add markers, polygons, etc. here as needed.
    // Example marker:
    var marker = new google.maps.Marker({
      position: center,
      map: map,
      title: 'Center Marker',
      label:"A",
      draggable:false,
      animation: google.maps.Animation.DROP
    });}

    
        