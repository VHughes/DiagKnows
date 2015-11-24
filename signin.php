<?php

#FOR PEOPLE SIGNING IN TO THEIR ACCOUNT

session_start();

if(isset($_SESSION['user'])!="")
{
 header("Location: index.html");
}

$host = "localhost";   
$user = "root";
$pass = "root";
$db = "illness"; 

//mysql_connect($host, $user, $pass);
//mysql_select_db($db);

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['user'])) {
    $user = $_POST['user'];
    $password = $_POST['pass'];
    
    $query = "SELECT * FROM UserName WHERE uName='".$user."' AND pass='".$password."' LIMIT 1";
    //var_dump($query);
    $sql = $conn->query($query);
    $num = $sql->rowCount();
    //$res = $sql;
    
if ($num == 1) {
   
    //echo('working');
    $result = $sql->fetchAll();
    //echo "<pre>";
    //var_dump($result);
    //echo "</pre>";
    //exit;
    
    $_SESSION['username'] = $result[0]['uName'];
    $_SESSION['login'] = true;
     header("Location: page5.php");
    
} else {
    
    //echo('not working');
    header("Location: dkerror.html");

}
  
}
//var_dump($sql);  

?>

