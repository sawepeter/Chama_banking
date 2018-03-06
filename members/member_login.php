<!DOCTYPE html>
<html>
<head>
<style>
	body{
		background-image: url('../admin/images/java.png');
		background-size: cover;
		background-position-x:center;
		background-position-y:center;
		text-align: justify;
		text-align: center;
	}
</style>
	<title>CHAMA | MEMBER-LOGIN</title>
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
            	<a href="member_login.php"><span class="glyphicon glyphicon-home"></span> HOME </a>
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
                    <div class="panel-heading" style="text-align: center">Chama Member Login </div>
                      <div class="panel-body" style="margin: 14px; text-align: left;">
                       <form method="POST" action="member_val.php">
                          <div class="row">
                              <label for="username"> Email </label>
                                <div class="col-md-12 input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span><input type="text" class="form-control" id="email" name="email" placeholder="chama@gmail.com" required="" /></div></div>
                          <div class="row">
                             <label for="Password"> Password </label>
                                <div class="col-md-12 input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span><input type="password" name="password" id="password" placeholder="**************" required="" class="form-control" />
                         </div>
                         </div>
                         <p><br /></p>
                         <div class="row">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-success btn-lg" id="login" value="Login" name="login" />
                        </div>
                        </div>
                         </form>
                         </div>
                         </div>
                         </div>
                         </div>
                         </body>
                         </html>

