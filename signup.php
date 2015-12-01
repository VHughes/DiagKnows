<?php 

# FOR WHEN PEOPLE MAKE AN ACCOUNT:

session_start();
#$_SESSION['signName']= $name

if(isset($_SESSION['user'])!="") {
 header("Location: index.php");
}

$host = "localhost";   
$user = "root";
$pass = "root";
$db = new PDO('mysql:host=localhost;dbname=illness', $user, $pass);

$conn = $db; 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
$signName = $_POST['signName'];
$signEmail = $_POST['signEmail'];
$signPass = $_POST['signPass'];
$lastName = $_POST['lastName'];
    
$sql = "INSERT INTO UserName (email, pass, uName, lname) VALUES ('$signEmail','$signPass','$signName','$lastName')";
  
$query = $db->prepare($sql);
$query->execute( array(':signName'=>$signName, ':signPass'=>$signPass, ':signEmail'=>$signEmail));
$result = $query->execute( array( ':signName'=>$signName, ':signPass'=>$signPass, ':signEmail'=>$signEmail ) );

//HELP? -------------->
$imgNum = "UPDATE username SET img = FLOOR(1 + RAND()*7) WHERE uName='".$signName."'";
$imgsql = $conn->query($imgNum); 
// <-----------------------

$table = "SELECT * FROM username WHERE uName='".$signName."' AND pass='".$signPass."' ";
//var_dump($table);
$sqli = $conn->query($table);

if($result)  {
    
     header("Location: disclaimer.html");
    
$reesult = $sqli->fetchAll();
  //var_dump($reesult);  
    $_SESSION['username'] = $reesult[0]['uName'];
    $_SESSION['lastname'] = $reesult[0]['lname'];
    $_SESSION['email'] = $reesult[0]['email'];
    $_SESSION['img'] = $reesult[0]['img'];
    
    $_SESSION['login'] = true;
    
   
    
    
} else {
    readfile("dkerror.html");
    exit;
}

?> 