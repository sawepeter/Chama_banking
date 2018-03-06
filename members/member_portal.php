<?php
session_start();
  
  if(!isset($_SESSION['id'])){
    header('location:member_login.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
<style>
	body{
		background-image: url('../images/java.png');
		background-size: cover;
		background-position-x:center;
		background-position-y:center;
	}
</style>
	<title>ADMIN | PORTAL</title>
	<link rel="stylesheet" type="text/css" href="../admin/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="../admin/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
   <div class="container-fluid">  
       <div class="navbar-header">
          <a href="#" class="navbar-brand">C.H.A.M.A</a>
        </div>
        <ul class="nav navbar-nav">
            <li>
            	<a href="portal.php"><span class="glyphicon glyphicon-home"></span> HOME </a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
            	<a href="logout.php"><h4><span class="glyphicon glyphicon-off"></span> Log Out </h4></a>
            </li>
        </ul>
        </div>
       </div>
       <p><br /></p>
       <p><br /></p>
       <p><br /></p>