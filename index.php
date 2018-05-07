<?php
session_start();

echo $_COOKIE['id'];
if(isset($_SESSION['uid'])){
    header("location:index_home.php");
}elseif(isset($_SESSION['cid'])){
    header("location:chemist/chemist_portal.php");
}
if(isset($_POST[load])){
    $type=$_POST['type'];
    if(!empty($type)){
        if($type=='client'){
            header('location:index_home.php');
        }elseif($type=='cook'){
            header('location:chemist/chemist_login.php');
        }else{

        }
    }
}
$first_name = 'Sawe';
setcookie('first_name', $first_name,time()+ (86400 * 7));
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background-image: url('admin/images/java.png');
            background-size: cover;
            background-position-x: center;
            background-position-y: center;
        }
    </style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Q | Medica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Q | Medica </a>
            </div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.php"><i class="glyphicon glyphicon-home"></i>Doctors</a>
                </li>
                <li>
                    <a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Medicine</a>
                </li>
            </ul>
        </div>
        </div>
        <p><br /></p>
        <p><br /></p>
        <p><br /></p>
        <p><br /></p>
        <p><br /></p>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading" style="text-align: center">
                We welcome you both to our system.
            </div>
            <div class="panel-body" style="text-align: center">
                <form method="post">
                    <label class="btn btn-warning"><b> Please select usertype here: !!</b></label>
                    <select name="type" id="type" style="width: 300px;height: 30px;">
                        <option value="">Select</option>
                        <option value="client">Client</option>
                        <option value="chemist">Chemist</option>
                        <option value="doctor">Doctor</option>
                    </select>
                    </form>
                </div>
                </div>
                </div>
                <div class="col-md-2"></div>
                </div>
                <div class="navbar navbar-inverse navbar-fixed-bottom">

                    <div class="panel-footer">
                        &copy; Q |  Medica
                        <?php

                        ?>
            <div style="float: right;">
                <a href="admin/admin_login.php">Special Login</a>
            </div>
            </div>
            </div>   
</body>
</html>