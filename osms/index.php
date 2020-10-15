<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>OSMS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Bottstrap css-->
  	<link rel="stylesheet"  href="css/bootstrap.min.css">
  	<!-- fontawesome css-->
  	<link rel="stylesheet"  href="css/all.min.css">
  	<!--  google font -->
  	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  	<!-- custom css-->
  	<link rel="stylesheet"  href="css/custom.css">
  	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
  	<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="#">OSMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">Services</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#register">Register</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="requester/requesterlogin.php">Log in</a>
      </li>
    </ul> 
 </div>
</nav> 
<!-- jumbotron -->
<header class="jumbotron back-image" style="background-image: url(image/d.jpg);">
	<div class="myclass">
		<h1 class="text-uppercase" style="color: red;font-weight: bold;">Welcome to OSMS</h1>
		<p class="font-italic" style="font-size: 30px;">Customer's happines is our aim</p>
		<a href="requester/requesterlogin.php" class="btn btn-primary" style="margin: 4px;font-weight: bold;">Log in</a>
		<a href="#register" class="btn btn-danger " style="margin: 10px;font-weight: bold;">Sign up</a>
	</div>
</header>
<div class="container">
	<div class="jumbotron">
		<h3 style="text-align: center;"id="services">OSMS services</h3>
		<p style="text-align: center; font-size: 30px;">OSMS service  is India's leading chain od multi-brand Electronics and Electrical  services offering wide array of services. We focus on enchancing your  uses experience by offering world-class Electronic  Applicances maintaince services.</p>
	</div>
</div>
<div class="container text-center border-bottom">
	<h2 style="font-weight: bold;" >Our Services</h2>
	<div class="row mt-4">
		<div class="col-sm-4">
			<img src="https://img.icons8.com/color/96/000000/tv.png">
			<h4>Electronic applicance</h4>
		</div>
		<div class="col-sm-4">
			<img src="https://img.icons8.com/windows/96/000000/horizontal-settings-mixer.png"/>
			<h4>Maintaince</h4>
		</div>
		<div class="col-sm-4">
			<img src="https://img.icons8.com/windows/96/000000/settings-3.png"/>
			<h4>Fault repairing</h4>
		</div>
	</div>
</div>
<!--start registration-->
<?php include('register.php') ?>
<!--closing registration-->

<!--start contact form-->
<?php include('contact.php')?>
<!--close contact form-->
<footer class="container-fluid bg-light mt-5 text-dark" >
	<div class="container">
		<div class="row py-3">
			<div class="col-md-6">
				<span class="pr-2">Follow us:</span>
				<a href="https://www.facebook.com/shah.meet.1420354"><img src="https://img.icons8.com/android/24/000000/facebook-new.png"/></a>
				<a href="https://www.instagram.com/meet_shah_10_10/"><img src="https://img.icons8.com/cute-clipart/24/000000/instagram-new.png"/></a>
				<img src="https://img.icons8.com/material-sharp/24/000000/twitter-squared.png"/>
			</div>
			<div class="col-md-6 text-right">
				<small>Designed by Meet Shah &copy; 2020</small>
				<small class="ml-2"><a href="admin/login.php">Admin Log in</a></small>
			</div>
		</div>
	</div>
</footer>
<!--bootstrap javascript-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>