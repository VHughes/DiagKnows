<?php
include('sessionstart.php');
?>

<!doctype html>
<html>
<head>
<!-- font -->
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="DK css.css">
  <link rel="stylesheet" type="text/css" href="responsive.css" />
   <link rel="icon" type="image/png" href="favicon32*32.ico" />
   
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
   <li><a  href="page5.php"><i class="fa fa-heartbeat" style="font-size:24px"> Home</i></a>
   </li>
  <li><a href="page11.php" ><i class="fa fa-user" style="font-size:24px"> Account</i></a></li>
  <li><a href="page13.php" ><i class="fa fa-gear" style="font-size:24px"> Setting</i></a>
  </li>
  </nav>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/menu.js"></script>

<!--result go here-->
<br><br>
<div id="titlename"> 
<h1> Dummy Text for: IBUPROFEN</h1>
</div>


<!--Description go here-->

<div id="titlename2"> 
<h2>Ibuprofen is a nonsteroidal anti-inflammatory drug (NSAID). It works by reducing hormones that cause inflammation and pain in the body.

Ibuprofen is used to reduce fever and treat pain or inflammation caused by many conditions such as headache, toothache, back pain, arthritis, menstrual cramps, or minor injury.

Ibuprofen is used in adults and children who are at least 6 months old.</h2>
</div>





 <input id="pac-input" class="controls" type="text" placeholder="Search Box">
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

<div id="buttonlogin12">
<form action="page9.php">
    <input type="submit" class="backbut12"  value="Back">
</form>
</div>

</body>

    <script>
var marker;
var map;
        
function initMap() {
  var myLatLng = {lat: 49.250864, lng: -123.000557};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 17,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    animation: google.maps.Animation.DROP,
    position:  myLatLng
  });
  marker.addListener('click', toggleBounce);
}

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}




    </script>

<style>
#map {
    height:300px;
    width:300px; 
}
</style>

    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
            async defer></script>
        <script>
</html>
