var map;
var initialize;

initialize = function(){
  var latLng = new google.maps.LatLng(50.6371834, 3.063017400000035); // Correspond au coordonnées de Lille
  var myOptions = {
    zoom      : 14, // Zoom par défaut
    center    : latLng, // Coordonnées de départ de la carte de type latLng 
    mapTypeId : google.maps.MapTypeId.TERRAIN, // Type de carte, différentes valeurs possible HYBRID, ROADMAP, SATELLITE, TERRAIN
    maxZoom   : 20
  };
  
  map      = new google.maps.Map(document.getElementById('map'), myOptions);
  
  var marker = new google.maps.Marker({
    position : latLng,
    map      : map,
    title    : "Parking de l'aéroport"
    //icon     : "marker_lille.gif" // Chemin de l'image du marqueur pour surcharger celui par défaut
  });
  
  var contentMarker = [
      '<div id="containerTabs">',
      '<div id="tabs">',
      '<div id="tab-1">',
        '<h3>Parking</h3><p>Le parking à votre disposition avant le départ en voyage</p>',
      '</div>',
      '</div>',
      '</div>',
      '</div>'
  ].join('');

  var infoWindow = new google.maps.InfoWindow({
    content  : contentMarker,
    position : latLng
  });
  
  google.maps.event.addListener(marker, 'click', function() {
    infoWindow.open(map,marker);
  });
  
  google.maps.event.addListener(infoWindow, 'domready', function(){ // infoWindow est biensûr notre info-bulle
    jQuery("#tabs").tabs();
  });
};

initialize();
