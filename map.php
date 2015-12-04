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
<h1 id="title">Local Pharmacies</h1>
</div>


<!--Description go here-->
   







    <div id="map"></div>

<!--result go here-->

 <div id="titlename10">   
    <h1 id="title"> Check out these local pharmacies for all your medical needs! </h1>    
 </div> 


<div id="buttonlogin10">
<form action="home.php">
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
    zoom: 13,
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
        radius: 3800,
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
      console.log(results);
    }
  }
}

function createMarker(place) {
  var placeLoc = place.geometry.location;
  var marker = new google.maps.Marker({
    map: map,
    position: place.geometry.location,
    icon: {
            url: "Assets/heart.ico",
            size: {
                width: 40,
                height: 40,
                },
                scaledSize: {
                    width: 40,
                    height: 40,
                            },
                
                }  
  });

  google.maps.event.addListener(marker, 'click', function() {
    var contentyo = "<b>Name:</b> " +place.name+ "<br><b>Location:</b> " +place.vicinity+ "";
    infowindow.setContent(contentyo);
    infowindow.open(map, this);
  });
}
        
    </script>
  </head>
 
    
    
    <script src="https://maps.googleapis.com/maps/api/js?signed_in=true&libraries=places&callback=initMap" async defer></script>
    
     <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 60vh;
		
		
		
      }
    </style>
</html>
