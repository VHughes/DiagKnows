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
 
$signName = $_POST['signName'];
$signEmail = $_POST['signEmail'];
$signPass = $_POST['signPass'];
$lastName = $_POST['lastName'];
    
$sql = "INSERT INTO UserName (email, pass, uName, lname) VALUES ('$signEmail','$signPass','$signName','$lastName')";
  
$query = $db->prepare($sql);
$query->execute( array(':signName'=>$signName, ':signPass'=>$signPass, ':signEmail'=>$signEmail));

$result = $query->execute( array( ':signName'=>$signName, ':signPass'=>$signPass, ':signEmail'=>$signEmail ) );

if($result)  {
      
readfile("page5.php");

   exit;
    
} else {
    readfile("dkerror.html");
    exit;
}

?> 