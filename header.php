<?php
error_reporting(0);
include("dbconnection.php");
$dt = date("Y-m-d");
$tim = date("H:i:s");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="M_Adnan" />
<!-- Document Title -->
<title>Aravind Eye Hospital - EMR</title>

<!-- Favicon -->
<link rel="icon" href="assets\images\logo2.png">

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

<!-- StyleSheets -->
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">

<!-- Fonts Online -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Raleway:200,300,400,500,600,700,800,900" rel="stylesheet">

<!-- JavaScripts -->
<script src="js/vendors/modernizr.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>

<!-- Page Loader -->
<div id="loader">
  <div class="position-center-center">
    <div class="cssload-thecube">
      <div class="cssload-cube cssload-c1"></div>
      <div class="cssload-cube cssload-c2"></div>
      <div class="cssload-cube cssload-c4"></div>
      <div class="cssload-cube cssload-c3"></div>
    </div>
  </div>
</div>
<!-- Page Wrapper -->
<!-- <div id="wrap">
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p style="font-weight:200px;font-size:25px;">Welcome To Aravind Eye Hospital</p>
        </div>
        <div class="col-sm-6">
          <div class="social-icons"> <a href="https://www.facebook.com/itsourcecode"><i class="fa fa-facebook"></i></a> <a href="https://www.twitter.com/itsourcecode"><i class="fa fa-twitter"></i></a> <a href="https://www.itsourcecode.com/"><i class="fa fa-dribbble"></i></a> <a href="https://www.linkedin.com/in/joken-villanueva-776b99157/"><i class="fa fa-linkedin"></i></a> <a href="https://www.youtube.com/c/JokenVillanueva?sub_confirmation=1"><i class="fa fa-youtube"></i></a> </div>
        </div>
      </div>
    </div>
  </div> -->


  
  <!-- Header -->
  <!-- <header class="header-style-2">
    <div class="container"> -->
      <!-- <div class="logo"> <a href="index.html"><img src="images/hmslogo.png" alt="" style="height: 51px;"></a> </div> -->
      <!-- <h2 style="font-size:49px;font-weight:bold;">Aravind Eye Hospital</h2>
      <h4 style="font-size:18px;font-weight:200px;"><i>Advanced Medical Reservation System</i></h4>
      <div class="head-info">
        <ul>
          <li> <i class="fa fa-phone"></i>
            <p>1111 222 33333<br>
            1-222-333-4444</p>
          </li>
          <li> <i class="fa fa-envelope-o"></i>
            <p>info@gmail.com<br>
              info@outlook.com</p>
          </li>
          <li> <i class="fa fa-map-marker"></i>
            <p>CloudVeins Technologies<br>
             Karamana</p>
          </li>
        </ul>
      </div>
    </div>
     -->
    <!-- Nav -->
    <nav class="navbar ownmenu">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
        </div>
        
        <!-- NAV -->
        <!-- <div class="collapse navbar-collapse navbar-right" id="nav-open-btn"> -->
         <div class="collapse navbar-collapse" id="nav-open-btn"> 
          <ul class="nav">
            <li> <a href="index.php">Home </a></li>
            <!-- <li><a href="about.php">About</a></li>            
            <li><a href="patientappointment.php">Appointment </a></li>
            <li><a href="contact.php">Contact </a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log In </a>
              <ul class="dropdown-menu multi-level" style="display: none;">
                <li><a href="adminlogin.php">Admin</a></li>
                <li><a href="doctorlogin.php">Doctor</a></li>
                <li><a href="nurselogin.php">Nurse </a></li>
                <li><a href="patientlogin.php">Patient </a></li> -->
              </ul>
            </li>           
          </ul>
        </div>
      </div>
    </nav>
  </header>