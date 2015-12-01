<?php 

$host = "localhost";   
$user = "root";
$pass = "root";
$db = "illness"; 

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$illness = array('Cold','Food Poisoning','Flu'); 

$name = "SELECT illness.ill_name FROM illness_symptom LEFT JOIN illness ON illness_symptom.ILL_ID=illness.ILL";
$sqli = $conn->query($name);
$result = $sqli->fetchAll();
//echo "<pre>";
//var_dump($result);
//echo "</pre>";
    
$_GET['cold'] = $result[0]['ill_name'];
$_GET['foodpoison'] = $result[8]['ill_name'];
$_GET['flu'] = $result[13]['ill_name'];

echo "haha " .$_GET['cold']. " yup " .$_GET['flu']. " whoops";
//$sql = $conn->query($name);
//echo($sql);
?>