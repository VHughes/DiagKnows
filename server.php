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
    //echo query;
    $_SESSION['login'] = true;
	$result = mysqli_query($con, $query);
	if($result){
		echo json_encode("INSERTED");
	}
}

function FBIDSelect(){
	global $con;
	$query = "SELECT * FROM username WHERE fbID = '".$_POST['fb_id']."'";
	$result = mysqli_query($con, $query);
	if($result){
		$row = mysqli_fetch_array($result);
		echo json_encode($row);
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
}

?>