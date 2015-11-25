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
   <li><a class="homer" href="page5.php"><i class="fa fa-heartbeat" style="font-size:24px"> Home</i></a>
   </li>
  <li><a href="page11.php" ><i class="fa fa-user" style="font-size:24px"> Account</i></a></li>
  <li><a href="page13.php" ><i class="fa fa-gear" style="font-size:24px"> Setting</i></a>
  </li>
  </nav>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/menu.js"></script>

 <br>
<div id="round">
            <img src="Assets/image-<?php echo rand(1,7); ?>.png" style="width:20%;max-height:800px; max-width:800px;"/>
            </div>
    

<?php 
   echo "<h2> Welcome To Your Account,  " .$_SESSION['username']. "</h2>";
    ?> 

<div id="info">
    <?php 
   echo "<h4> Name: " .$_SESSION['username']. " " .$_SESSION['lastname']. "</h4>" ;
    ?> 
    <?php 
   echo "<h4> Email: " .$_SESSION['email']. "</h4>";
    ?> 
</div>

<!--Details result go here-->

<div id="buttonlogin11">
<form action="dkerror.html">
    <input type="submit"  class="editbut11" value="Add Information To Profile">
</form></div>

<div id="buttonlogin11">
<form action="page13.php">
    <input type="submit" class="backbut11" value="Back">
</form>
</div>

</body>
</html>
