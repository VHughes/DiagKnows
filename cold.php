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
<h1 id='title'>SELECTED ILLNESS:<br>
<br>
COLD
</h1>
</div>

    
<div id="titlename8-1">
<h2>Select the Best Suited <br> Drug for you</h2>
</div>

        <div class='wrapper12'>
  <input id='pictures' type='checkbox'>
  <label for='pictures'>
    <p>Acetaminophen</p>
    <div class='lil_arrow'></div>
    <div class='content'>
      <ul><br>
        <li>
          Commonly Used To Treat:
        </li>
      <li>
       - Headaches
       </li>
         <li>
       - Fever
       </li>
         <li>
       - Muscle aches
       </li>
         <li>
       - Menstrual cramps
       </li><br>
         <h6 id="description">
       Acetaminophen will reduce fever and general pain, but should not be taken during pregnancy or if you have ever had alcoholic liver disease
       </h6><br>
        <li>
       Brands Which Contain This Drug:
       </li><br>
          <li>
       - Actamin
       </li>
          <li>
       - Tylenol
       </li>
         <li>       
          <a href='map.php' >Yes! This is the drug!</a>
        </li>
      </ul>
    </div>
    <span></span>
  </label>
  <input id='jobs' type='checkbox'>
  <label for='jobs'>
    <p>Ibuprofen</p>
    <div class='lil_arrow'></div>
    <div class='content'>
      <ul><br>
          <li>
          Commonly Used To Treat:
          </li>
      <li>
       - Headaches
       </li>
         <li>
       - Fever
       </li>
         <li>
       - Muscle aches       
       </li>
         <li>
       - Anti-inflammatory
       </li><br>
         <li id="description">
       Buprofen is an anti-flammatory drug that relieves bodily pain. It can be used with children, and lasts longer than other pain killers
       </li><br>
         <li>
        Brands Which Contain This Drug:
       </li>
         <li>
       - Advil
       </li>
         <li>
       - Midol
       </li>
         <li>
       - Motrin
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
    <p>Anitussives</p>
    <div class='lil_arrow'></div>
    <div class='content'>
      <ul><br>
        <li>
          Commonly Used To Treat:
       </li>
       <li>
       - Coughs
       </li><br>
         <li>
       - Congestion
       </li><br>
         <li>
       - Sore throat
       </li><br>
         <li>
       - Breathing trouble
       </li><br>
         <li id="description">
       Antitussives reduces mucus and supresses coughs, but should not be taken with children under 12
        </li><br>
         <li>
       Brands Which Contain This Drug:
       </li><br>
         <li>
       - Robitussin
       </li><br>
         <li>
       - Buckleys
       </li><br>
         <li>
       - Vicks Dayquil
       </li><br>
         <li>
          <a href='map.php' >Yes! This is the drug!</a>
        </li>
      </ul>
    </div>
    <span></span>
  </label>
  <input id='four' type='checkbox'>
  <label for='four'>
  <p>Aspirin</p>
    <div class='lil_arrow'></div>
    <div class='content'>
      <ul><br>
        <li>
          Commonly Used To Treat:
       </li>
        <li>
       - Headaches
       </li><br>
         <li>
       - Fever
       </li><br>
         <li>
       - Pain    
       </li><br>
         <li id="description">
       Asprin reduces inflammation and fever, should not be used during pregnancies or if you have a bleeding disorder such as hemophilia
       </li><br>
         <li>
       Brands Which Contain This Drug:
       </li><br>
         <li>
       - Advil
       </li><br>
         <li>
       - Bayer
       </li><br>
         <li>
       - Miniprin
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
}
</script>
	
</body>
</html>
