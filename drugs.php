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
    <link rel="stylesheet" href="css/style_acc.css">
  </head>
<title>Drug result</title>
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
<div id="titlename8"> 
<h1>SELECTED ILLNESS:<br>
<br>
COLD
</h1>
</div>

    
<div id="titlename8-1">
<h2>Select the Best Suited <br> Drug for you</h2>
</div>
<!--result go here-->


 <!--<input id="Drug1" type="button" value="Ibuprofen"></input>
    
      <div id="p4"> </div>
    
      
    
 <input id="Drug2" type="button" value="Acetaminophen "></input>
      <div id="p5"></div>
   
 <input id="Drug3" type="button" value="Aspirin"></input>
      <div id="p6"></div>



	<script>
		  $(document).ready(function() {
          $("#Drug1").click(function(){
              $("#p4").toggle(200);
			  $("#p5").slideUp(200);
			  $("#p6").slideUp(200);
			  
			  $('#p4').html("<div class='first'><center><li>Anti-Inflammatory</li><li>Treats Pain</li><li>Reduces Fever</li><li>Headaches, Muscle Aches, Back Aches, Tooth Aches,Menstrual Cramps, Arthritis</li><li>More side effects than Acetaminophen</li><li>Can prolong bleeding</li><li> Stronger and lasts longer than Acetaminophen</li></center><div><form action='page10.php'><input type='submit' value='Yes! This is the drug!' class='backbut9-1' id='tutorialhead1' ></form></div></div><br> ");
            })
          });
        

  		$(document).ready(function() {
          $("#Drug2").click(function(){
              $("#p5").toggle(200);
			  $("#p4").slideUp(200);
			  $("#p6").slideUp(200);
			  
			   $('#p5').html("<div class='first'><center><li>Treats Pain</li><li>Reduces Fever</li><li>Headaches, Muscle Aches, Back Aches, Tooth Aches,Menstrual Cramps, Arthritis</li><li>Safest during pregnancies</li></center><form action='page10.php'><input type='submit' value='Yes! This is the drug!' class='backbut9-1' id='#tutorialhead1'></form></div><br> ");
            })
          });


$(document).ready(function() {
          $("#Drug3").click(function(){
              $("#p6").toggle(200);
			  $("#p4").slideUp(200);
			  $("#p5").slideUp(200);
			 
			   $('#p6').html("<div class='first'><center><li>Anti-Inflammatory</li><li>Treats Pain</li><li>Reduces Fever</li><li>Blood Thinner</li><li>Do not use during pregnancy</li><li>Do not use with children under 18 years of age</li><li>Headaches, Muscle Aches, Back Aches, Tooth Aches,Menstrual Cramps, Arthritis</li></center><form action='page10.php'><input type='submit' value='Yes! This is the drug!' class='backbut9-1' id='#buttonlogin9'></form></div><br> ");
            })
          });

</script>-->


        <div class='wrapper12'>
  <input id='pictures' type='checkbox'>
  <label for='pictures'>
    <p>Drug 1</p>
    <div class='lil_arrow'></div>
    <div class='content'>
      <ul><br>
      <li>
      Drug descriptions
        <li><br>
          <a href='map.php' >Yes! This is the drug!</a>
        </li>
      </ul>
    </div>
    <span></span>
  </label>
  <input id='jobs' type='checkbox'>
  <label for='jobs'>
    <p>Drug 2</p>
    <div class='lil_arrow'></div>
    <div class='content'>
      <ul><br>
      <li>
       Drug descriptions
       </li><br>
        <li>
          <a href='map.php' >Yes! This is the drug!</a>
        </li>
      </ul>
    </div>
    <span></span>
  </label>
  <input id='events' type='checkbox'>
  <label for='events'>
    <p>Drug 3</p>
    <div class='lil_arrow'></div>
    <div class='content'>
      <ul><br>
        <li>
           Drug descriptions
        </li><br>
        <li>
          <a href='map.php' >Yes! This is the drug!</a>
        </li>
      </ul>
    </div>
    <span></span>
  </label>

</div>

<div id="buttonlogin9">
<form action="illness.php">
    <input type="submit" class="backbut9"  value="Back">
</form>
</div>
	
</body>
</html>
