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
 
<title>Home</title>
</head>

<body>
<!-- menu -->

<script src="js/prefixfree.min.js"></script>

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    

    <nav>
<a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i> Menu</a>    
   <ul class="menu">
   <li><a class="homer" href="home.php"><i class="fa fa-heartbeat" style="font-size:24px"> Home</i></a>
   </li>
  <li><a href="account.php" ><i class="fa fa-user" style="font-size:24px"> Account</i></a></li>
  <li><a href="setting.php" ><i class="fa fa-gear" style="font-size:24px"> Setting</i></a>
  </li>
  </nav>
  
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/menu.js"></script>




<div id="logo5"> 
<img src="Assets/diagknows logo.png" alt="logo" style="width:50%;max-height:600px; max-width:800px;">
</div>
    <div id='welcomeMsg'>  
   <?php 
    if(isset($_SESSION['username'])) {
            $usr = $_SESSION['username'];
   echo "<h2> Welcome to Diagknows,  " . $usr. "</h2>";
    }

    ?> 
   </div> 
<div id="buttonlogin5">
<form action="symptoms.php">
    <input type="submit" value="Search" class="search5">
</form>

<!--link to page-->
<form action="account.php">
    <input type="submit" value="Rate" class="search5">
</form>
</div>
</body>
<style>
#welcomeMsg {
padding:10px;
font-size:1.75em;
font-family: 'Calibri';
}    
</style>
</html>
