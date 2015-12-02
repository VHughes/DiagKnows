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
   <link rel="icon" type="image/png" sizes="32x32" href="Assets/favicon-32x32.png"/>
   
   <link rel="stylesheet" type="text/css" href="css/menu.css" />
   
    <link rel="stylesheet" type="text/css" href="css/dropdown.css" />
   <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="css/reset.css">


<title>Search</title>
<style>
</style>


</head>

<body>
<!-- menu -->

<script src="js/prefixfree.min.js"></script>

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    
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



<div id="logo6"> 
<img src="Assets/diagknows logo.png" alt="logo" style="width:50%;max-height:600px; max-width:800px;">
</div>

<!--result-->
<script src="js/dropdown.js"></script>
<div class="container6">
  <ul class="choice-list6">
    <li name="symp1" id="symp1">Headache</li>
    <li id="symp2">Runny Nose</li>
    <li id="symp3">Fever</li>
    <li id="symp4">Vomiting</li>
    <li id="symp5">Nausea</li>
    <li id="symp6">Weakness</li>
    <li id="symp7">Cough</li>
    <li id="symp8">Cramps</li>
    <li id="symp9">Sore Throat+</li>
  </ul>
</div>

<!--add java for button-->

<!--<div id="buttonlogin6">
<button id='addSymp' class="Loginbut6">+ Add Symptom</button>
</div>-->
<div id="buttonlogin6">
    
<form action="illness.php">
    <input type="submit" id="submitsymp" value="Next" class="Loginbut6">
</form>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script>
    var submit = document.getElementById("submitsymp").required = true;
    submit.onclick = function(){
        var symp1 = document.getElementById("symp1");
        var symp2 = document.getElementById("symp2");
        var symp3 = document.getElementById("symp3");
        var symp4 = document.getElementById("symp4");
        var symp5 = document.getElementById("symp5");
        var symp6 = document.getElementById("symp6");
        var symp7 = document.getElementById("symp7");
        var symp8 = document.getElementById("symp8");
        var symp9 = document.getElementById("symp9");  
        
        
         if("document.getElementById('symp1') > .select" && "document.getElementById('symp2') > .select" && "document.getElementById('symp3') > .select"){
            alert("checked");
        } else {
            alert("not checked");
        }
        
        
        $.ajax({
            type: 'GET',
            url: '',
            dataType: 'json',
            data: 'answer=' + answer,
            success: function(response) {
                alert(response);
            }
        })
           
    
}
</script>
</body>
</html>
   