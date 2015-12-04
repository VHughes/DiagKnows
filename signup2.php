<?php 

# FOR WHEN PEOPLE MAKE AN ACCOUNT:

session_start();
#$_SESSION['signName']= $name

if(isset($_SESSION['firstname'])!="") {
 header("Location: index.php");
}

$host = "localhost";   
$user = "root";
$pass = "root";
$db = new PDO('mysql:host=localhost;dbname=illness', $user, $pass);

$conn = $db; 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

//$value = isset($_POST['firstname']) && !empty($_POST['firstname']);
    
$sql = "INSERT INTO username (email, pass, uName, lname) VALUES (:email,:password,:firstname,:lastname)";
  
$query = $db->prepare($sql);
$result = $query->execute( array( ':email'=>$email, ':password'=>$password, ':firstname'=>$firstname, ':lastname' => $lastname ) );




//HELP? -------------->

$imgsql = "UPDATE username SET img = FLOOR(1 + RAND()*7) WHERE uName= :firstname";
  
$imgquery = $db->prepare($imgsql);
$imgresult = $imgquery->execute( array( ':firstname'=>$firstname) );

//---session stuff


$data = 'success';

$table = "SELECT * FROM username WHERE uName='".$firstname."' AND pass='".$password."' ";
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


echo json_encode($data, JSON_FORCE_OBJECT);

?> 