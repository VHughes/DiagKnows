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
   
   <link rel="stylesheet" href="css/reset_dropdown.css">
    
   <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="css/reset.css">
    <script src="js/prefixfree.min_dropdown.js"></script>

<title>Search</title>

<style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Raleway);


.custom-select {
  font-family: 'Raleway', sans-serif;
  position: relative;
  width: 100%;
  max-width: 40em;
  margin: 4em auto;
  cursor: pointer;
  margin-left: 35.5%;
  margin-right:auto;
}

.selection-choice{
	font-family: 'Raleway', sans-serif;
	display:inline;
}
.select,
.label {
  display: block;
}

.select {
  width: 100%;
  position: absolute;
  top: 0;
  padding: 1em;
  height: 4em;
  opacity: 0;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  background: none transparent;
  border: 0 none;
}

.label {
  position: relative;
  padding: 1em;
  border-radius: .5em;
  cursor: pointer;
}

.label::after {
  content: "▼";
  color:#47CBB8;
  position: absolute;
  right: 0;
  top: 0;
  padding: 0.6em;
  border-left: 2px solid;
}

.open .label::after {
  content: "▲";
}

.select-1 {
	font-family: 'Raleway', sans-serif;
  background: #d3f3ee;
  border-bottom: 0.25em solid #A9E7DE;
}
.select-1:after {
  border-color: #47CBB8;
}

.select-2 {
	font-family: 'Raleway', sans-serif;
  background: #d3f3ee;
  border-bottom: 0.25em solid #A9E7DE;
}
.select-2:after {
  border-color: #47CBB8;
}

.select-3 {
	font-family: 'Raleway', sans-serif;
  background: #d3f3ee;
  border-bottom: 0.25em solid #A9E7DE;
}
.select-3:after {
  border-color: #47CBB8;
}


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
   <li><a class="homer" href="page5.php"><i class="fa fa-heartbeat" style="font-size:24px"> Home</i></a>
   </li>
  <li><a href="page11.php" ><i class="fa fa-user" style="font-size:24px"> Account</i></a></li>
  <li><a href="page13.php" ><i class="fa fa-gear" style="font-size:24px"> Setting</i></a>
  </li>
  </nav>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/menu.js"></script>



<div id="logo6"> 
<img src="Assets/diagknows logo.png" alt="logo" style="width:50%;max-height:600px; max-width:800px;">
</div>

<!--<div id="h1back6"><h1>Please Input Symptoms</h1></div>

<div id="input6">
<input type="text" class="input6-2" placeholder="Tap to input symptom">
<input type="text" class="input6-2" placeholder="Tap to input symptom">
</div>-->


    <form action="#">
 

  <div class="custom-select">
    <label for="select-choice1" class="label select-1"><span class="selection-choice">Please choose</span> </label>
    <select id="select-choice1" class="select">
      <option value="Choice 1">Choice 1</option>
      <option value="Choice 2">Choice 2</option>
      <option value="Choice 3">Choice 3</option>
    </select>
  </div>
  
  <div class="custom-select">
    <label for="select-choice2" class="label select-2"><span class="selection-choice">Please choose</span> </label>
    <select id="select-choice2" class="select">
      <option value="Choice 1">Choice 1</option>
      <option value="Choice 2">Choice 2</option>
      <option value="Choice 3">Choice 3</option>
    </select>
  </div>
  
  <div class="custom-select">
    <label for="select-choice3" class="label select-3"><span class="selection-choice">Please choose</span> </label>
    <select id="select-choice3" class="select">
      <option value="Choice 1">Choice 1</option>
      <option value="Choice 2">Choice 2</option>
      <option value="Choice 3">Choice 3</option>
    </select>
  </div>
  </form>
<!--add java for button-->

<div id="buttonlogin6">
<button id='addSymp' class="Loginbut6">+ Add Symptom</button>
</div>
<div id="buttonlogin2">
    
<form action="page7.php">
    <input type="submit" value="Next" class="Loginbut6">
</form>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index_dropdown.js"></script>
</body>
    

</html>
