<?php
			
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cctv";
 
 $conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql = "SELECT * FROM form";
$result = $conn->query($sql);
$submitrequest = $result->num_rows;

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>CCTV Camera List ©</title>
</head>
<body>


<div class="col-sm-9 col-md-10"><!-- start od dashboard-->
			<div class="row text-center mx-5">
				<div class="col-sm-4">
					<div class="card text-white bg-danger mb-3">
						<div class="card-header"> Request Recieved</div>
						<div class="card-body"></div>
						<h4 class="card-title"><?php echo $submitrequest;?></h4>
						<a class="btn text-white" href="#">View</a>
					</div>
				</div>
				
			</div>	



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</body>
</html>


