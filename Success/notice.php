<!DOCTYPE html>
 <html>
 <head>
 	
 	

	  <meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1"> 
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	 </head>
 <body>
 
<?php include 'menu.php'; ?>


<title>Digital Notice - Add Notice </title> 
<h1 align="center">Digital Notice Board </h1>
<h3 align="center">Add Notice</h3>

<center>
	<form action="notice1.php" method="post">
		<div class="col-sm-4">
		<input type="text" name="subject" class="form-control" placeholder="Subject" required><br>
		</div>
		<div class="col-sm-4">
		<input type="text" name="link" class="form-control" placeholder="Link" ><br>
		</div>
		<div class="col-sm-4">
		<textarea name="description" cols="4" class="form-control" rows="10" placeholder="Description here"></textarea>
	</div>
	<div class="jumbotron">
	<a href="meny.php" class="btn btn-secondary" role="button">
	<input type="submit" name="Submit" class="btn-btn-info" class="btn-btn-secondary" value="Add"></a>
	<div class="jumbotron">
	<a href="notice.php" class="btn btn-secondary" role="button">
	<input type="reset" name="Reset" class="btn-btn-danger" value="Reset All Fields"></a>
	
	</form>
</center>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>  

 </body>
 </html>