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



    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    
  </head>
	<body>

    <nav>
<a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i> Menu</a>    
   <ul class="menu">
   <li><a  href="home.php"><i class="fa fa-heartbeat" style="font-size:24px"> Home</i></a>
   </li>
  <li><a href="account.php" ><i class="fa fa-user" style="font-size:24px"> Account</i></a></li>
  <li><a href="setting.php" ><i class="fa fa-gear" style="font-size:24px"> Settings</i></a>
  </li>
  </nav>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/menu.js"></script>


<!--result go here-->
<br><br>    
<div id="titlename8"> 
<h1 id='title'>SELECTED ILLNESS:<br>
<br>
FLU
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
          <li id="description">
       Acetaminophen will reduce fever and general pain, but should not be taken during pregnancy or if you have ever had alcoholic liver disease
       </li><br>
        <li>
       BRANDS
       </li>
         <li>   
          <li>
       - Actamin
       </li>
         <li>  
          <li>
       - Tylenol
       </li><br>
         <li id='drugbutt'>  
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
       Ibuprofen is an anti-flammatory drug that relieves bodily pain. It can be used with children, and lasts longer than other pain killers
       </li><br>
         <li>
       BRANDS
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
        <li id='drugbutt'>
          <a href='map.php' >Yes! This is the drug!</a>
        </li>
      </ul>
    </div>
    <span></span>
  </label>
  <input id='events' type='checkbox'>
  <label for='events'>
    <p>Aspirin</p>
    <div class='lil_arrow'></div>
    <div class='content'>
      <ul><br>
        <li>
       - Headaches
       </li>
         <li>
       - Fever
       </li>
         <li>
       - Pain    
       </li><br>
          <li id="description">
       Asprin reduces inflammation and fever, should not be used during pregnancies or if you have a bleeding disorder such as hemophilia
       </li><br>
         <li>
       BRANDS
       </li>
         <li>
       - Advil
       </li>
         <li>
       - Bayer
       </li>
         <li>
       - Miniprin
       </li><br>
        <li id='drugbutt'>
          <a href='map.php' >Yes! This is the drug!</a>
        </li>
      </ul>
    </div>
    <span></span>
  </label>
   <input id='four' type='checkbox'>
  <label for='four'>
    <p>Dimenhydrinate</p>
    <div class='lil_arrow'></div>
    <div class='content'>
      <ul><br>
        <li>
       -Nausea
       </li>
         <li>
       - Vomiting
       </li>
         <li>
       - Dizziness    
       </li>
         <li>
       - Motion sickness    
       </li><br>
          <li id="description">
       Dimenhydrinate is an antihistamine and anticholinergic that will reduce nausea and motion sickness and should not be take if you are taking sodium oxybate or are breast feeding
       </li><br>
         <li>
       BRANDS
       </li>
         <li>
       - Travel-Eze
       </li>
         <li>
       - Hydrate
       </li><br>
        <li id='drugbutt'>
          <a href='map.php' >Yes! This is the drug!</a>
        </li>
      </ul>
    </div>
    <span></span>
  </label>

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
