<!DOCTYPE html>
<html>
<head>
	<title>File uploading</title>
		  <meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1"> 
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	 <?php include 'menu.php'; ?>

<form method="post" enctype="multipart/form-data"> 
	<label>Title</label>
	<input type="text" name="title">
	<label>File upload</label>
	<input type="File" name="file">
	<input type="submit" name="submit">
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>  

</body>
</html>
<?php

$con = mysqli_connect('localhost','root');

if(isset($_POST["submit"]))
{
	$title = $_POST["title"];

	$pname = rand(1000,10000)."-".$_FILES["file"]["name"];

	$tname = $_FILES["file"]["tmp_name"];

	$uploads_dir = '/images';

	move_uploaded_file($tname,$uploads_dir.'/'.$pname);

	$sql = "INSERT INTO  fileup(title,image) VALUES ('$title','$pname')";
	if (mysqli_query($con,$sql)) {
		echo "File succesfully uploaded";
	}
	else
	{
		echo "error";
	}
}
  ?>
