<html>
	<head>
	<style>
	body{
		background-image: url('admin/images/java.png');
		background-size: cover;
		background-position-x:center;
		background-position-y:center;
	}
</style>
	<title>Q | MEDICA</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="js/jquery2.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js" ></script>
	<!--<script src="js/main.js" type="text/javascript"></script>-->
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="index.php" class="navbar-brand"> Q | MEDICA</a>
</div>
		<ul class="nav navbar-nav">
			<li><a href="index.php">
				<span class="glyphicon glyphicon-home"></span> Doctors</a></li>
			<li><a href="index.php">
				<span class="glyphicon glyphicon-modal-window"></span> Medicine</a></li>
			<li style="width: 300px;left: 10px;top: 10px;">
				<input placeholder="Enter text to search here" type="text" class="form-control" id="search" /></li>
</ul>
		<ul class="nav navbar-nav navbar-right">
		<?php
		if(!isset($_SESSION['uid'])){
		?>
		<li><a href="" class="dropdown-toggle" data-toggle="dropdown">
			<span class="glyphicon glyphicon-user"></span>Log In </a>
			<ul class="dropdown-menu">
				<div style="width: 300pox;">
					<form method="post">
						<div class="panel panel-primary">
							<div class="panel-heading"><b>Login</b></div>
								<div class="panel-heading">
									<label for="email"> Email </label>
										<input type="email" class="form-control" id="email" required="" />
									<label for="password"> Password</label>
										<input type="password" class="form-control" id="password" required="" />
										<p><br /></p>
											<a href="#" style="list-style: none;color: white;">Forgotten password?</a>
										<input type="submit" class="btn btn-success" style="float: right;"  id="login" value="LogIn" />
									</div>
		<div class="panel-footer" id="e_msg"></div>
</div>
</form>
</div>
</ul>
</li>
<?php
}else{
	?>
	<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">
		<span class="glyphicon glyphicon-user"></span> Hello! <?php echo"".$_SESSION['name']; ?></a>
	<ul class="dropdown-menu">
		<li><a href="client_profile.php" style="text-decoration: none;color: blue;">
			<span class="glyphicon glyphicon-user"></span> My Profile</a></li>
		<li classs="divider"></li>
		<li><a href="logout.php" style="text-decoration: none;color: blue;">
			<span class="glyphicon glyphicon-off" style="color: red;"> Log Out</a></li>
		</ul>
		</li>
		<?php
}
?>
<li><a href="#" class="dropdown-toggle" id="cart_container" data-toggle="dropdown">
	You have <span class="badge">0</span> items(s) In your Cart</a>
</li>
<li><a href="cart.php" style="text-decoration: none;"><span class="glyphicon glyphicon-shopping-cart"></span>
	My Cart</a></li>
</ul>
</div>
</div
<p><br /></p>
<p><br /></p>
<p><br /></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div id="get_category">

				</div>
			<div class="get_type">

			</div>
			</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12" id="product_msg">

						</div>
					</div>
					<div class="panel panel-info">
						<div class="panel-heading">Available Medicines</div>
						<div class="panel-body">
							<div id="get_product">
							<!--we are getting available food via jquery ajax request-->
							</div>
							</div>
							</div>
							</div>
							<div class="col-md-1"></div>
							</div>
						<div class="row">
							<div class="col-md-12">
								<center>
									<ul class="pagination" id="pageno">
										<li>Pages: <a href="#">1</a></li>
									</ul>
								</center>
							</div>
							</div>
						<div class="panel-footer">
							&copy; Q-Medica
							<?php
							?>
							</div>
							</div>
							</body>
							</html>

						

</body>
</html>