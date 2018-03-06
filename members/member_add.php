<?php
include '../admin/conn.php';

$error = false;

if(isset($_POST['add'])){

$customer = mysql_real_escape_string($_POST['customer']);
$date = date("Y-m-d");
$email = mysql_escape_string($_POST['email']);
$phone = mysql_escape_string($_POST['phone']);
$amount = mysql_escape_string($_POST['amount']);
$address = mysql_escape_string($_POST['address']);
$status = "ACTIVE";
$approved = '0';


$password = $_POST['password'];
$password = md5($password);

$sql = "INSERT INTO customers(id,name,dob,address,mobile,email,password,lastlogin,accstatus,approved)  
VALUES ('','$customer', '$date','$address', '$phone','$email','$password', '','$status','$approved')";

     $retval = $conn->query($sql);

     if(!$retval) {
     	die('Could not enter your data:');
     }
     echo "Entered data successfully";
     mysqli_close($conn);

}
?>