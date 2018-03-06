<?php
$hostserver = "localhost";
$username = "root";
$password = "";
$dbname = "chama";

//create connection

$conn = new mysqli($hostserver,$username,$password,$dbname);

//check connection

if($conn->connect_error){
	die("Connection failed:" .$conn->connect_error);
}
?>