<?php
include('sessionstart.php');
?>

<!doctype html>
<html>
<head>
<!-- font -->
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />

<link rel="stylesheet" type="text/css" href="DK css.css">
  <link rel="stylesheet" type="text/css" href="responsive.css" />
   <link rel="icon" type="image/png" sizes="32x32" href="Assets/favicon-32x32.png"/>
   
   <link rel="stylesheet" type="text/css" href="css/menu.css" />
    
   <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="css/reset.css">
  </head>
<title>Information for drug</title>
</head>

<body>
<!-- menu -->

<script src="js/prefixfree.min.js"></script>

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    
  </head>
	<body>

    <nav>
<a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i> Menu</a>    
   <ul class="menu">
   <li><a  href="home.php"><i class="fa fa-heartbeat" style="font-size:24px"> Home</i></a>
   </li>
  <li><a href="account.php" ><i class="fa fa-user" style="font-size:24px"> Account</i></a></li>
  <li><a href="setting.php" ><i class="fa fa-gear" style="font-size:24px"> Setting</i></a>
  </li>
  </nav>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/menu.js"></script>

<!--result go here-->
<br><br>
<div id="titlename10"> 
<h1> Dummy Text for: IBUPROFEN</h1>
</div>


<!--Description go here-->

<div id="titlename10-1"> 
<h2>Ibuprofen is a nonsteroidal anti-inflammatory drug (NSAID). It works by reducing hormones that cause inflammation and pain in the body.

Ibuprofen is used to reduce fever and treat pain or inflammation caused by many conditions such as headache, toothache, back pain, arthritis, menstrual cramps, or minor injury.

Ibuprofen is used in adults and children who are at least 6 months old.</h2>
</div>






    <div id="map"></div>

<!--result go here-->

<div id="Drugbar"> 
<h3>Here's a brief descriptin for Advil, which will talk about why Advil is better than other brand names</h3>
</div>

<div id="Drugbar"> 
<h3>Here's a brief description that will argues that Motrin is actually a decent alternative to Advil, because it's slightly cheaper</h3>
</div>

<div id="Drugbar"> 
<h3>Here's a brief description that says this lesser-known brand is actually the exact same as the other two. Try Medipren for a change!</h3>
</div>

<div id="Drugbar"> 
<h3>Here's a brief description that asks if you're tired of brand names. Maybe try the generic medicine, Iburprofen. Want a fancy name brand? How about Nuprin?! </h3>
</div>

<div id="buttonlogin10">
<form action="drugs.php">
    <input type="submit" class="backbut12"  value="Back">
</form>
</div>

</body>

 
    <script>
var map;
var infowindow;

function initMap() {
 var myLatLng = {lat: 50, lng: -123.000557};
  map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    zoom: 16
  });

  infowindow = new google.maps.InfoWindow();
    
  if (navigator.geolocation) {
      console.log(navigator.geolocation);
    navigator.geolocation.getCurrentPosition(function(position) {
        console.log(position);
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      myLatLng = pos;
      infowindow.setPosition(pos);
      infowindow.setContent('Location found.');
      map.setCenter(pos);
    var service = new google.maps.places.PlacesService(map);
        service.nearbySearch({
        location: pos,
        radius: 800,
        types: ['pharmacy']
    }, callback);
    }, function(error) {
        console.log(error);
      handleLocationError(true, infowindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infowindow, map.getCenter());
  }
 
 function handleLocationError(browserHasGeolocation, infowindow, pos) {
  infowindow.setPosition(pos);
  infowindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
}
}

function callback(results, status) {
  if (status === google.maps.places.PlacesServiceStatus.OK) {
    for (var i = 0; i < results.length; i++) {
      createMarker(results[i]);
    }
  }
}

function createMarker(place) {
  var placeLoc = place.geometry.location;
  var marker = new google.maps.Marker({
    map: map,
    position: place.geometry.location
  });

  google.maps.event.addListener(marker, 'click', function() {
    infowindow.setContent(place.name);
    infowindow.open(map, this);
  });
}


    </script>
  </head>
  <body>
    <div id="map"></div>
    
    <script src="https://maps.googleapis.com/maps/api/js?signed_in=true&libraries=places&callback=initMap" async defer></script>
    
     <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 30%;
		
		
		
      }
    </style>
</html>
