/* // Google Map //
$('#map_canvas').gmap({
  'center': new google.maps.LatLng(25.7971356, -80.3666424), // Change this to your desired latitude and longitude
'zoom': 13,
'mapTypeControl': false,
'navigationControl': false,
'streetViewControl': false,
'styles': [{
  stylers: [{
    gamma: 0.60
  }, {
    hue: "#5DBEB2"
  }, {
    invert_lightness: false
  }, {
    lightness: 2
  }, {
    saturation: -20
  }, {
    visibility: "on"
  }]
}]
});
var image = {
url: 'images/marker.png', // Define the map marker file here
// This marker is 51 pixels wide by 63 pixels tall.
size: new google.maps.Size(51, 63),
// The origin for this image is 0,0.
origin: new google.maps.Point(0, 0),
// The anchor for this image is the base of the flagpole at 26,63.
anchor: new google.maps.Point(26, 63)
};
$('#map_canvas').gmap().bind('init', function () {
$('#map_canvas').gmap('addMarker', {
  'id': 'marker-1',
  'position': '25.7974581,-80.3663702',
  'bounds': false,
  'icon': image
}).click(function () {
  $('#map_canvas').gmap('openInfoWindow', {
      'content': '<h4>Prime Log Solutions.</h4><p><strong>Freight Forwarders</strong><br>10470 NW 26 Street - Suite A - Doral, FL 33172<br>Phone: (305) 418-9201 - Fax: 866-422-3257</p>'
  }, this);
});
}); */

var map;
  var infoWindow
  var myLatLng
  function initMap() {
    myLatLng = {lat: 25.7971356, lng: -80.3666424};

    map = new google.maps.Map(document.getElementById('map_canvas'), {
      center: myLatLng,
      zoom: 13,
      mapTypeControl: false,
      navigationControl: false,
      streetViewControl: false,
      styles: [{
        stylers: [{
          gamma: 0.60
        }, {
          hue: "#5DBEB2"
        }, {
          invert_lightness: false
        }, {
          lightness: 2
        }, {
          saturation: -20
        }, {
          visibility: "on"
        }]
      }]
    });

        var image = {
    url: 'images/marker.png', // Define the map marker file here
    // This marker is 51 pixels wide by 63 pixels tall.
    size: new google.maps.Size(51, 63),
    // The origin for this image is 0,0.
    origin: new google.maps.Point(0, 0),
    // The anchor for this image is the base of the flagpole at 26,63.
    anchor: new google.maps.Point(26, 63)
    };
    
    var addMarker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          icon: image
        });

    addMarker.addListener('click', writeaddress); 
    // Define an info window on the map.
    infoWindow = new google.maps.InfoWindow();
  }

  function writeaddress(event) {
        
        var contentString = '<h4>Prime Log Solutions.</h4><p><strong>Freight Forwarders</strong><br>10470 NW 26 Street - Suite A - Doral, FL 33172<br>Phone: (305) 418-9201 - Fax: 866-422-3257</p>'

        // Set the info window's content and position.
        infoWindow.setContent(contentString);
        infoWindow.setPosition(myLatLng);
        infoWindow.open(map);
      }
