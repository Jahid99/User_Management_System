<?php 
include '../lib/Session.php';
Session::checkSession();
?>
<?php include '../config/config.php';?>
<?php include '../lib/Database.php';?>
<?php include '../helpers/Format.php';?>
<?php 
        $db = new Database();
        $fm = new Format();     
 ?>
 <?php
	    if(isset($_GET['action']) && isset($_GET['action'])=="logout"){
	        Session::destroy();
	    }
       if($_SESSION['username']!='adminsays'){
        echo "<script>window.location='../'</script>";
        exit;
      }
      
?>
                
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title>User Management System - Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo SITE_URL;?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo SITE_URL;?>assets/css/main.css" rel="stylesheet">

    <!-- Fonts from Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>

  <!-- Website Font style -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

 
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
  #content > div > div > div > div > div > div > div > div > form > div > div:nth-child(3) > button{
    padding: 10px 12px;
}
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;

}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 11px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
#content > div > div > div > div > div.container > div > div:nth-child(2){
  margin-top: 10px;
}
</style>
  </head>

  <body>
    <div id="wrapper">
    <!-- Fixed navbar -->
    <div id="header">
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><b>User Management System</b></a>
        </div>
         <?php 
                $path = $_SERVER['SCRIPT_FILENAME'];
                $currentpage = basename($path,'.php');
          ?>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li  <?php if($currentpage=='index'){echo 'class="active"';} ?>><a href="index.php">Home</a></li>

            
              
              
              
              <li class="dropdown <?php if($currentpage=='addgroup' ||$currentpage=='groups' ||$currentpage=='editgroup' ||$currentpage=='usersbygroup' ||$currentpage=='changegroup' ||$currentpage=='assigngroup' ){echo 'active';} ?>" ><a class="dropdown-toggle" data-toggle="dropdown" href="#">Family Groups<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="addgroup.php">Add New group</a></li>
                    <li><a href="groups.php">Groups List</a></li>
                </ul>
              </li>
              
              <li class="dropdown <?php if($currentpage=='addbusiness' ||$currentpage=='business' ||$currentpage=='usersbybusiness' ||$currentpage=='changebusiness' ||$currentpage=='assignbusiness' ||$currentpage=='editbusiness' ){echo 'active';} ?>" ><a class="dropdown-toggle" data-toggle="dropdown" href="#">Business Category<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="addbusiness.php">Add New Business Category</a></li>
                    <li><a href="business.php">Business Categories List</a></li>
                </ul>
              </li>
              
              <li class="dropdown <?php if($currentpage=='addcomment' ||$currentpage=='comment' ||$currentpage=='usersbycomment' ||$currentpage=='changecomment' ||$currentpage=='assigncomment' ||$currentpage=='editcomment' ){echo 'active';} ?>" ><a class="dropdown-toggle" data-toggle="dropdown" href="#">Note Category<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="addcomment.php">Add New Note Category</a></li>
                    <li><a href="comment.php">Note Categories List</a></li>
                </ul>
              </li>
              
             
          <li class="dropdown <?php if($currentpage=='changepassword'){echo 'active';} ?>" ><a class="dropdown-toggle" data-toggle="dropdown" href="#">Hello : <?php echo Session::get('username'); ?> <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="changepassword.php">Change Password</a></li>
                <li><a href="?action=logout">Logout</a></li>
            </ul>
          </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
<div id="content">
  <div class="container">
    <div class="row main"><br><br><br>