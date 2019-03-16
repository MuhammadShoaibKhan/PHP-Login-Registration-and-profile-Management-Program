<?php

$filepath = realpath(dirname(__FILE__));
include_once $filepath.'/../lib/Session.php';
Session::init();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>

  <?php
    if(isset($_GET['action']) && $_GET['action'] == "logout"){
      Session::destroy();
    }

?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="inc/logo.png"></a>
    </div>
    <ul class="nav navbar-nav pull-right">

    <?php
      $id = Session::get("id");
      $userlogin = Session:get("login");

    if($userlogin == true){

    

    ?>


      <li><a href="index.php">Home</a></li>
      <li><a href="profile.php">Profile</a></li>
      <li><a href="?action=logout">Logout</a></li>
    <?php     }  else{  ?>
    ?>
      <li><a href="login.php">Login</a></li>
      <li><a href="Register.php">Register</a></li>
   
    <?php    }   ?>
      </ul>
  </div>
</nav>