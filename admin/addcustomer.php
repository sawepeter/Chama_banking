<!DOCTYPE html>
<html>
<head>
<style>
	body{
		background-image: url('images/java.png');
		background-size: cover;
		background-position-x:center;
		background-position-y:center;
		text-align: justify;
		text-align: center;
	}
</style>
	<title>Admin | add-customer</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
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
     <div class="row">
     <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="panel panel-primary">
             <div class="panel-heading" style="text-align: center"> Chama Add customer. </div>
             <div class="panel-body" style="margin: 14px; text-align: left;">
               <form role="form" action="add_customer.php" method="post">
                    <div class="row">
                       <label for="Customer-name"> Customer's Name </label>
                       <div class="col-md-12 input-group "><span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span><input type="text" class="form-control" id="customer" name="customer" placeholder="Customer's Name" required="" />
                         </div>
                         </div>
                    <div class="row">
                       <label for="Customer-name"> DOB</label>
                       <div class="col-md-12 input-group "><span class="input-group-addon"><span class="glyphicon glyphicon-list"></span></span><input type="date" class="form-control" id="date" name="date" placeholder="Date of Birth" required="" />
                         </div>
                         </div>
                    <div class="row">
                       <label for="Customer-name"> Email </label>
                       <div class="col-md-12 input-group "><span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span><input type="email" class="form-control" id="email" name="email" placeholder="chama@gmail.com" required="" />
                         </div>
                         </div>
                    <div class="row">
                       <label for="Customer-name"> Mobile Number </label>
                       <div class="col-md-12 input-group "><span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span><input type="text" class="form-control" id="phone" name="phone" placeholder="+0725632415" required="" />
                         </div>
                         </div>
                    <div class="row">
                       <label for="Customer-name"> Minimum Amount </label>
                       <div class="col-md-12 input-group "><span class="input-group-addon"><span class="glyphicon glyphicon-save"></span></span><input type="text" class="form-control" id="amount" name="amount" placeholder="Ksh: 1000" required="" />
                         </div>
                         </div>
                    <div class="row">
                       <label for="Customer-name"> Addresss </label>
                       <div class="col-md-12 input-group "><span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span><input type="text" class="form-control" id="address" name="address" placeholder="Customer's Address" required="" />
                         </div>
                         </div>
                    <div class="row">
                       <label for="Customer-name"> Password </label>
                       <div class="col-md-12 input-group "><span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span><input type="password" class="form-control" id="password" name="password" placeholder="Customer's password" required="" />
                         </div>
                         </div>
                         <p><br /></p>
                         <div class="row">
                            <div class="col-md-12">
                                <input type="submit" name="add" class="btn btn-success btn-lg pull-right" id="add_customer" value="Add Customer" />
                    </div>
                    </div>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>
                            <div class="panel-footer">&copy; C.H.A.M.A 2017</div> 
                            </div>
</body>
</html>