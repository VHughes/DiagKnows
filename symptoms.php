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
<img src="Assets/diagknows logo.png" alt="logo" id="islalogo">
</div>
<div id='welcomeMsg'>
Please Choose One Of The Following Symptom
</div>
<!--result-->
<script src="js/dropdown.js"></script>
<div id='container' class="container6">
  <ul name='choicelist' class="choice-list6">
    <li name="1" id="1">Headache</li>
    <li name="2" id="2">Runny Nose</li>
    <li name="3" id="3">Fever</li>
    <li name="4" id="4">Vomiting</li>
    <li name="5" id="5">Nausea</li>
    <li name="6" id="6">Weakness</li>
    <li name="7" id="7">Cough</li>
    <li name="8" id="8">Cramps</li>
    <li name="9" id="9">Sore Throat</li>
    <li name="10" id="10">Acid Reflux</li>
  </ul>
</div>

<!--add java for button-->

<!--<div id="buttonlogin6">
<button id='addSymp' class="Loginbut6">+ Add Symptom</button>
</div>-->
<div id="buttonlogin6">
    
    <input type="button" id="submitsymp" value="Next" class="Loginbut6">
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script>
    $(document).ready(function(){
        var sub = document.getElementById("submitsymp");
        sub.onclick = function(){ 
            
            //alert('hello');
            var checked = document.getElementsByClassName('active');
            console.log(checked);
            var array = [];
            for(var i=0; i<checked.length; i++){
                   //alert(checked[i].id)
                   array.push(checked[i].id);
            }
            
                


            $.ajax({
                type: 'POST',
                url: 'SymptomChoices.php',
                dataType: 'json',
                data: {
                    checked: array
                },
                success: function(response) {
                    console.log(response);
                    
                    var container = document.getElementById("container");
                    document.body.removeChild(container);
                    
                    var div = document.getElementById("buttonlogin6");
                    document.body.removeChild(div);
                    
                    
                    for(var i=0; i<response.length; i++) {
                        
                    var illnessDiv = document.createElement('div');
                    document.body.appendChild(illnessDiv);
                    illnessDiv.id = 'buttonlogin5';
                    var h2 = document.createElement('button');
                    illnessDiv.appendChild(h2);
                        
                    var x = response[i].ill_name;
                    
                       
                    h2.innerHTML = x;
                    h2.className = "Loginbut6";
                    h2.id = response[i].Ill; 
                    h2.style.width = "80vw";
                    //h2.style.marginLeft = "auto"; 
                        
                    
                      /*  var cold = document.getElementById('1');          
                        
                    cold.onclick = function(){
                            var cold = illnessDiv.getElementById('1'); 
                       location.href = "drugs.php";
                        
                    };
                        var food = illnessDiv.getElementById('2'); 
                    food.onclick = function(){
                            
                       location.href = "congrat.php";
                        
                    };
                    var flu = illnessDiv.getElementById('3'); 
                    flu.onclick = function(){
                            
                       location.href = "dkerror.html";
                        
                    };
                
                */
                      
                        //var att = response[i].ill_name;
                        
                        
                    //att.setAttribute("href", "page9.php");
                    
                
             
                    if(response[i].Ill == 1){
                       h2.onclick = function(){
                        location.href = "cold.php";
                       }
                    }    
                        
                          if(response[i].Ill == 2){
                        h2.onclick = function(){
                        location.href = "foodpoison.php";
                       }
                    }   
                          if(response[i].Ill == 3){
                        h2.onclick = function(){
                        location.href = "flu.php";
                       }
                        
                        
                    }
                            if(response[i].Ill == 4){
                        h2.onclick = function(){
                        location.href = "heartburn.php";
                       }
                        
                        
                    } 
                        
                    }
                    var div = document.createElement("div");
                    document.body.appendChild(div);
                    div.id = "buttonlogin6";
                    
                    var backbut = document.createElement("button");
                    div.appendChild(backbut);
                    backbut.className = "Loginbut6";
                    backbut.id = "submitsymp";
                    backbut.style.value = "Back";
                    backbut.innerHTML = "Back";
                    backbut.style.width = "40vw"
                    
                    
                    backbut.onclick = function(){
                        location.href = "symptoms.php";
                    
                    }
                    
                       
                
            }


        });
    }});
</script>
</body>
</html>