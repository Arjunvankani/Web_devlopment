<!DOCTYPE html>
 <html>
 <head>
 	<title>Project Managment</title> 

	  <meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1"> 
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	 </head>
 <body>
 
<?php include 'menu.php'; ?>

<section class="my-5">
	<div class="py-5" >
		<h2 class="text-center">Reminder Desk</h2>
	</div>
	<div class="w-50 m-auto">
		<form action="remindered.php" method="post">
			<div class="form-group">
				<label>Project Name </label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label> Starting Date</label>
				<input type="Date1" name="date1" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Ending Date </label>
				<input type="Date2" name="date2" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Working Hours</label>
				<input type="text" name="hour" autocomplete="off" class="form-control">
			</div>

			<label for="radiobtn"><b>Category</b></label><br>
    <input type="radio" placeholder="Manager" value="Manager" name="category" required>Manager
    <input type="radio" placeholder="Team Leader" value="Team Leader" name="category" required>Team Leader
    <input type="radio" placeholder="Developer" value="Developer" name="category" required>Employee
    <hr>
		

			<button type="submit" class="btn btn-success">Submit</button>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>  

 </body>
 </html>