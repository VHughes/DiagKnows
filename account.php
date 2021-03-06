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
<title>Account</title>
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
  <li><a class="homer" href="account.php" ><i class="fa fa-user" style="font-size:24px"> Account</i></a></li>
  <li><a href="setting.php" ><i class="fa fa-gear" style="font-size:24px"> Setting</i></a>
  </li>
  </nav>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/menu.js"></script>
        <script src="editPic.js"></script>

 <br>
<div id="round">
            <img id='image' src="Assets/image-<?php echo $_SESSION['img'] ?>.png" />
            </div>
<div id='welcomeMsg11'>
<?php 
   echo "<h2> Welcome To Your Account,  " .$_SESSION['username']. "</h2>";
    ?> 
</div>

<div id="info">
    <?php 
   echo "<h4> Name: " .$_SESSION['username'] ." ". $_SESSION['lastname']. "</h4>" ;
    ?> 
    <?php 
   echo "<h4> Email: " .$_SESSION['email']. "</h4>";
    ?> 
</div>

<!--Details result go here-->

<div id="titleback11">
<h2>Rate DiagKnows!</h2>
</div>


<!--name result go here-->
    

<div id="ratediv">
    <h6 class="question">Are you satisfied with the results you were given?</h6>
<form action="">
    <input type="button" value="Rate" id="rate1" class="ratebut12">
</form></div>

<div id="ratediv">
<h6 class="question">How easy did you find the website to navigate? </h6>
<form action="">
    <input type="button" value="Rate" id="rate2" class="ratebut12">
</form></div>

<section id="radio" class="rating" style="display:none">
<br>
<h7 dir="rtl">Tell us what you think</h7>
  <!-- FIFTH STAR -->
  <input type="radio" id="star_5" name="1" value="5" />
  <label for="star_5" title="Five">&#9733;</label>
  <!-- FOURTH STAR -->
  <input type="radio" id="star_4" name="1" value="4" />
  <label for="star_4" title="Four">&#9733;</label>
  <!-- THIRD STAR -->
  <input type="radio" id="star_3" name="1" value="3" />
  <label for="star_3" title="Three">&#9733;</label>
  <!-- SECOND STAR -->
  <input type="radio" id="star_2" name="1" value="2" />
  <label for="star_2" title="Two">&#9733;</label>
  <!-- FIRST STAR -->
  <input type="radio" id="star_1" name="1" value="1" />
  <label for="star_1" title="One">&#9733;</label>
   
    
<input dir="rtl" type="button"  value="Rate" id="ratebut12" style="display:none">
   </section>
    

<div id="ratediv">
<h6 class="question">Did our recommendations help you?</h6>
<form action="">
    <input type="button" value="Rate" id="rate3" class="ratebut12">
</form></div>

<div id="ratediv">
<h6 class="question">How likely are you to recommend DiagKnows to a friend?</h6>
<form action="">
    <input type="button" value="Rate" id="rate4" class="ratebut12">
</form>
</div>
<script>
 window.onload = function(){
     
     var rate1 = document.getElementById("rate1");
     rate1.onclick = function(){
    
        var div = document.getElementById("radio");
        div.style.display="block";
        var rate = document.getElementById("ratebut12");
        rate.style.value = "Rate!";
        rate.style.display="block";
        div.appendChild(rate);
            
            rate.onclick = function(){
                alert("Thank you for your input!");
                div.style.display="none";
            
            }
     };
     
     var rate2 = document.getElementById("rate2");
     rate2.onclick = function(){
         
        var div = document.getElementById("radio");
        div.style.display="block";
        var rate = document.getElementById("ratebut12");
        rate.style.value = "Rate!";
        rate.style.display="block";
        div.appendChild(rate);
            
         rate.onclick = function(){
                alert("Thank you for your input!");
                div.style.display="none";
            
            }
     
     };
     
     var rate3 = document.getElementById("rate3");
     rate3.onclick = function(){
         
        var div = document.getElementById("radio");
        div.style.display="block";
        var rate = document.getElementById("ratebut12");
        rate.style.value = "Rate!";
        rate.style.display="block";
        div.appendChild(rate);
         
            rate.onclick = function(){
                alert("Thank you for your input!");
                div.style.display="none";
            
            }
     
     };
     
     var rate4 = document.getElementById("rate4");
     rate4.onclick = function(){
         
        var div = document.getElementById("radio");
        div.style.display="block";
        var rate = document.getElementById("ratebut12");
        rate.style.value = "Rate!";
        rate.style.display="block";
        div.appendChild(rate);
         
            rate.onclick = function(){
                alert("Thank you for your input!");
                div.style.display="none";
            
            }
     
     };
     
 };
       
</script>

<div id="buttonlogin10">
<form action="setting.php">
    <input type="submit" class="backbut12"  value="Back">
</form>
</div>

</body>
</html>
