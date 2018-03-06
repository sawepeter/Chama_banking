<?php

session_start();
 
 include 'conn.php';


 if(isset($_POST['login'])){


 	$username = mysqli_real_escape_string($conn,$_POST['username']);
 	$password = mysqli_real_escape_string($conn,$_POST['password']);

 	$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

 	$run_query=mysqli_query($conn,$sql);
 	
 		if($row = mysqli_fetch_array($run_query)){
 		$_SESSION['id']=$row['id'];
 		$_SESSION['name']=$row['name'];
 		header("Location: portal.php");
 		
 		} else {
 			echo "Incorrect Admin credentials";
 		}

 	}
?>