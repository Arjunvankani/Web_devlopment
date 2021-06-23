<?php 
include('../connection.php');
session_start();
if($_SESSION['is_login'])
{
	$remail = $_SESSION['remail'];
}
else
{
	echo "<script>location.href='requesterlogin.php'</script>";
}
$remial = $_SESSION['remail'];
if(isset($_REQUEST['update']))
{
	if($_REQUEST['rpassword'] == "")
	{
		$passmsg = '<div class="alert alert-warning col-sm-6 mt-3" role="alert">All fields are required</div>';
	}
	$rpass = $_REQUEST['rpassword'];
	$sql = "UPDATE requesterlogin_tb SET r_password = '$rpass' WHERE  r_email  = '$remial'";
		if($conn->query($sql) == TRUE)
		{
			$passmsg = '<div class="alert alert-success col-sm-6 mt-3"role="alert">Successfully updated </div>';
		}
		else
		{
			$passmsg = '<div class="alert alert-danger col-sm-6 mt-3"role="alert">Unable to  updated </div>';	
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet"  href="../css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/fontawesome.min.css">
	<link rel="stylesheet"  href="../css/custom.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="#">OSMS</a>
</nav>
<!-- start container -->
<div class="container-fluid" style="margin-top: 40px;"></div>
	<div class="row"><!-- start  row-->
		<nav class="col-sm-2 bg-light sidebar py-2 "><!-- start side bar 1st column-->
			<div class="sidebar-sticky">
				<ul class="nav flex-column" style="font-weight: bold;">
					<li class="nav-item" ><a class="nav-link "  href="requesterprofile.php"><img src="https://img.icons8.com/material-sharp/24/000000/user.png"/>Profile</a></li>
					<li class="nav-item"><a class="nav-link" href="submitrequest.php"><img src="https://img.icons8.com/windows/24/000000/request-service.png"/>Submit Request</a></li>
					<li class="nav-item"><a class="nav-link "  href="servicestatus.php"><img src="https://img.icons8.com/material-sharp/24/000000/timer.png"/>Service Status</a></li>
					<li class="nav-item"><a class="nav-link bg-danger" style="color: white;" href="changepassword.php"><img src="https://img.icons8.com/android/24/000000/key.png"/>Change Password</a></li>
					<li class="nav-item"><a class="nav-link" href="../logout.php"><img src="https://img.icons8.com/metro/24/000000/export.png"/>Log Out</a></li>
				</ul>
			</div>
		</nav><!-- end side bar 1st column-->
		<div class="col-sm-6">
			<form action="" method="POST" style="margin-top: 2;" class="mx-5">
				<div class="form-group">
					<label>E-mail</label><br>
					<input type="email" name="remail" id="remail" class="form-control" value="<?php echo $remail ?>" readonly>
				</div>
				<div class="form-group">
					<label>New Password</label><br>
					<input type="password" name="rpassword" id="inputpassword" class="form-control" placeholder="New Password">
				</div>
				<button type="submit" name="update" class="btn btn-danger" >Update</button>
				<button class="btn btn-dark" type="submit" style="margin-left: 10px;">Reset</button>
				<?php 
				if(isset($passmsg))
				{
					echo $passmsg;
				}
				?>
			</form>

		</div>
		
	</div><!-- end row-->
</div><!--end container-->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.css"></script>
</body>
</html>