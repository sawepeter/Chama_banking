<?php
session_start();

if(isset($_SESSION['id'])){
	session_destroy();
	unset($_SESSION['id']);
	unset($_SESSION['name']);
	   header("Location: adminlogin.php");
}else {
	header("Location: adminlogin.php");
}
?>