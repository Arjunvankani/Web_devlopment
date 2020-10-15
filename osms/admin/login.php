<?php 
include('../connection.php');
session_start();
if(isset($_SESSION['is_adminlogin']))
echo "";{
if(isset($_REQUEST['aemail']))
{
	$aemail = mysqli_real_escape_string($conn,trim($_REQUEST['aemail']));
	$apassword = mysqli_real_escape_string($conn,trim($_REQUEST['apassword']));
	$sql = "SELECT a_email,a_password FROM adminlogin_tb WHERE a_email = '".$aemail."' AND a_password = '".$apassword."' limit 1 ";
	$result = $conn->query($sql);
	if ($result->num_rows == 1) 
	{
		$_SESSION['is_adminlogin'] = true;
		$_SESSION['aemail'] = $aemail;
		echo "<script>location.href='dashboard.php';</script>";
		exit;
	}	
	else
	{
		$msg = '<div class="alert alert-warning mt-2">Enter valid E-mail or Password</div>';
	}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet"  href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/fontawesome.min.css">
</head>
<body>
<div class="mt-5 text-center" style="font-size: 30px;">
	<img src="https://img.icons8.com/ios-glyphs/24/000000/stethoscope.png"/> 
	<span>Online Service Managment Service</span>
</div>
<p style="text-align: center;font-size: 20px;margin-top: 10px;"><img style="margin-right: 20px;" src="https://img.icons8.com/material-sharp/24/000000/insurance-agent.png"/>Admin Log in area</p>
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-sm-6 col-md-4">
			<form action="" method="POST" >
				<div class="form-group ">
					<img src="https://img.icons8.com/ios/24/000000/email.png"/>
					<label style="font-weight: bold;">Email</label><br>
					<input type="text" name="aemail" placeholder="Email" class="form-control">
				</div>
				<div class="form-group mt-3">
					<img src="https://img.icons8.com/android/24/000000/key.png"/>
					<label style="font-weight: bold;">Password</label><br>
					<input type="Password" name="apassword" placeholder="Password" class="form-control">
				</div>
				<button type="submit" class="btn btn-outline-danger mt-3 font-weight-bold">Log in</button>
				<?php if(isset($msg)) {echo $msg;} ?>
			</form>
			<div><a href="../index.php" class="btn btn-primary mt-4">Back to home</a></div>		
		</div>
	</div>
</div>
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.css"></script>
</body>
</html>