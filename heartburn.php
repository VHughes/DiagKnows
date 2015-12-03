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
HEARTBURN
</h1>
</div>

    
<div id="titlename8-1">
<h2>Select the Best Suited <br> Drug for you</h2>
</div>

        <div class='wrapper12'>
  <input id='pictures' type='checkbox'>
  <label for='pictures'>
    <p>Antiacids</p>
    <div class='lil_arrow'></div>
    <div class='content'>
      <ul><br>
       <li>
       - Stomach acid
       </li><br>
         <li>
       - Heartburn
       </li><br>
         <li>
         Antacids contain alkaline ions that directly neutralize stomach gastric acid but do not kill bacteria like other acid reducing drugs such as Helicobacter Pylori
       </li><br>
         <li style="font-style:oblique">
        BRANDS
       </li><br>
         <li>
       - Gaviscon
       </li><br>
         <li>
       - Alka Seltzer
       </li><br>
         <li>
       - Maalox
       </li><br>
        <li>
          <a href='map.php' >Yes! This is the drug!</a>
        </li>
      </ul>
    </div>
    <span></span>
  </label>
  <input id='jobs' type='checkbox'>
  <label for='jobs'>
    <p>Bismuth Subsalicylate</p>
    <div class='lil_arrow'></div>
    <div class='content'>
      <ul><br>
      <li>
       - Diarrhea
       </li><br>
         <li>
       - Indigestion
       </li><br>
         <li>
      - Heartburn
       </li><br>
         <li>
       - Nausea
       </li><br>
         <li>
       Treats temporary discomforts of the stomach and gastrointestinal tract and should not be taken if breastfeeding or with children with chickepox or influenza
       </li><br>
           <li style="font-style:oblique">
       BRANDS
       </li><br>
       <li>
       - Pepto-Bismol
       </li><br>
         <li>
       - TUMS, Rolaids
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
    <p>Magnesium Hydroxide</p>
    <div class='lil_arrow'></div>
    <div class='content'>
      <ul><br>
        <li>
       - Sour stomach
       </li><br>
         <li>
       - Acid
       </li><br>
         <li>
       - Indigestion
       </li><br>
         <li>
       Magnesium Hydroxide is a histamine blocker combined with an antiacid to help neutralize stomach acide production. Do not use if you are taking calcium or if you are allergic to H2 blockers suc as rantidine
       </li><br>
         <li>
         <li style="font-style:oblique">
       BRANDS
       </li><br>
        <li>
        - Pepcid Complete
       </li><br>
        <li>
          <a href='map.php' >Yes! This is the drug!</a>
        </li>
      </ul>
    </div>
    <span></span>

</div>

<div id="buttonlogin9">
<form action="symptoms.php">
    <input type="submit" class="backbut9"  value="Back">
</form>
</div>

<script>

window.onload = function(){

            $.ajax({
                type: 'POST',
                url: 'SymptomChoices.php',
                dataType: 'json',
                data: {
                    checked: array
                },
                success: function(response) {
                    console.log(response);



//SELECT * FROM illness_symptom WHERE SYM_ID = 1;
                //SELECT * FROM illness_symptom LEFT JOIN illness ON illness.ILL = ILL_ID  WHERE SYM_ID = 1;
                    
    }
});
        
</script>
	
</body>
</html>
