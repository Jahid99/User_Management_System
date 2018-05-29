<?php 
include 'lib/Session.php';
Session::checkSession();
?>
<?php include 'config/config.php';?>
<?php include 'lib/Database.php';?>
<?php include 'helpers/Format.php';?>
<?php 
        $db = new Database();
        $fm = new Format();     
 ?>
 <?php
	    if(isset($_GET['action']) && isset($_GET['action'])=="logout"){
	        Session::destroy();
	    }
        if(isset($_SESSION['username']) && $_SESSION['username']=='adminsays'){
        echo "<script>window.location='admin/'</script>";
        exit;
      }
?>
                
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>User Management System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
    <div id="wrapper">
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
            </div>
            <?php 
                $path = $_SERVER['SCRIPT_FILENAME'];
                $currentpage = basename($path,'.php');
            ?>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li  <?php if($currentpage=='index'){echo 'class="active"';} ?>><a href="<?php echo SITE_URL;?>">Home</a></li>
                    <li  <?php if($currentpage=='dashboard'){echo 'class="active"';} ?>><a href="dashboard.php">Dashboard</a></li>
                    <?php if(!isset($_SESSION['login'])){ ?>
                    <li  <?php if($currentpage=='register'){echo 'class="active"';} ?>><a href="register.php">Register</a></li>
                            <li  <?php if($currentpage=='login'){echo 'class="active"';} ?>><a href="login.php">Login</a></li>
                            <?php } ?>
                            <?php if(isset($_SESSION['login']) && $_SESSION['login']==true){ ?>
                            
                             <li class="dropdown <?php if($currentpage=='changepassword'){echo 'active';} ?>" ><a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome : <?php echo Session::get('username'); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            
            <li><a href="changepassword.php">Change Password</a></li>
            <li><a href="<?php echo SITE_URL;?>?action=logout">Logout</a></li>
          </ul>
                            <?php } ?>
                           
         </li>
                </ul>
            </div>
        </div>
    </header><!--/header-->
    <div id="content">