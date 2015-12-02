<?php 

$host = "localhost";   
$user = "root";
$pass = "root";
$db = "illness"; 

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$name = "SELECT illness.ill_name, illness.Ill FROM illness_symptom LEFT JOIN illness ON illness_symptom.ILL_ID=illness.ILL WHERE SYM_ID= :number";

$number = $_POST['checked'][0];

$sqli = $conn->prepare($name);
$sqli->execute(array(
    ":number"=>$number
));

$result = $sqli->fetchAll();

echo json_encode($result);
?>