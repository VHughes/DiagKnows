<?php
session_start();
include("connection.php");

   

function Register(){
	global $con;
	$query = "INSERT INTO username (email, password) VALUES ('" .$_POST['email']."', '".$_POST['password']."')";

	$result = mysqli_query($con, $query);
	if($result){
		echo json_encode("INSERTED");
	}
}

function FBRegister(){
	global $con;
	$query = "INSERT INTO username (email, uName, fbID, img) VALUES ('" .$_POST['email']."', '".$_POST['name']."', '".$_POST['fb_id']."', '".$_POST['img']."')";
    $result = mysqli_query($con, $query);
    //echo query;
   /* $_SESSION['login'] = true;
    
	
    
    
    
    $table = "SELECT * FROM username WHERE uName='".$name."'";
    var_dump($query);
   
    
    //var_dump($results);
    
    */
    
	if($result){
		echo json_encode("INSERTED");
   
	}
}

function FBIDSelect(){
	global $con;
	$query = "SELECT * FROM username WHERE fbID = '".$_POST['fb_id']."'";
	$result = mysqli_query($con, $query);
	if($result){
    $user = "root";
    $pass = "root";
    $db = new PDO('mysql:host=localhost;dbname=illness', $user, $pass);

    $conn = $db; 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $row = mysqli_fetch_array($result);
		echo json_encode($row);
         $_SESSION['login'] = true;
        $name = $_POST['fb_id'];
        $table = "SELECT * FROM username WHERE uName='".$name."'";
         $sqli = $conn->query($table);
        $results = $sqli->fetchAll();
        var_dump($results);
        exit;
        $_SESSION['username'] = $results[0]['uName'];
        $_SESSION['lastname'] = $results[0]['lname'];
        $_SESSION['email'] = $results[0]['email'];
        echo $_SESSION['username'];
    
	}
	
}





if($_POST['mode'] == 0){
	Register();
}

if($_POST['mode'] == 1){
	FBRegister();
    
   
    
}

if($_POST['mode'] == 2){
	FBIDSelect();
    
    //$_SESSION['username'] = $results[0]['uName'];
    //var_dump($results);
    //$results = sqli->fetchAll();
}

?>