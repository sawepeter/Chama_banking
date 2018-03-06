<?php

session_start();
 
 include '../admin/conn.php';


 if(isset($_POST['login'])){


 	$email = $_POST['email'];
	 $password = $_POST['password'];
	 $hash = md5($password);

 	$sql = "SELECT * FROM customers WHERE email='$email' AND password='$hash'";

 	$run_query= $conn->query($sql);
 	
 		if($run_query->num_rows >0){
			 $row = $run_query->fetch_assoc();

 		$_SESSION['id']=$row['id'];
 		$_SESSION['name']=$row['name'];
 		header("Location: member_portal.php");
 		
 		} else {
 			echo "Incorrect  credentials $email, $password";
 		}

 	}
?>