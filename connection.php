<?php

$con = mysqli_connect("localhost", "root", "root", "illness");

if(mysqli_connect_errno()){
	echo "something went wrong when connecting".mysqli_connect_error();	
} 
?>