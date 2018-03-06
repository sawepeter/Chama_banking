<?php
session_start();
  
  if(!isset($_SESSION['id'])){
    header('location:adminlogin.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
<style>
	body{
		background-image: url('images/java.png');
		background-size: cover;
		background-position-x:center;
		background-position-y:center;
	}
</style>
	<title>ADMIN | PORTAL</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
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

       <div class="container">
          <div class="row">
              <div id="empty_msg">
              </div>
              </div>
         <div class="row">
            <div class="col-mid-1">
              <div class="col-mid-12">
                  <div class="panel panel-info">
                     <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-check"></span> Admin <b> <?php echo $_SESSION['name']."'s"; ?></b> Dashboard</h3>
                    </div>

                    <div class="panel-body">
                       <div class="row">
                          <div class="col-xs-6 col-md-6" style="margin: 0px;">
                            <a href="addcustomer.php" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-plus-sign"></span><br /> Add Customer </a><br /> <br />
                            <a href="edit_customer.php" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-edit"></span><br /> Edit Customer</a><br /> <br />
                            <a href="#" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-check"></span><br /> Delete Customer</a><br /><br />
                            </div>
                         <div class="col-xs-6 col-md-6">
                           <a href="addstaff.php" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-plus-sign"></span><br /> Add Staff Member</a><br /><br />
                           <a href="#" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-edit"></span><br /> Edit Staff Member</a><br /><br />
                           <a href="#" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-check"></span><br /> Delete Staff Member</a>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                    <div class="panel-footer" style="">&copy; chama 2017 Admin portal</div>

</body>
</html>