<?php
include('../connection.php');
session_start();
if(isset($_SESSION['is_adminlogin']))
{
	$aemail = $_SESSION['aemail'];
}
else
{
	echo "<script> location.href='login.php'</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Requester Profile</title>
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
		<nav class="col-sm-2 bg-light sidebar py-2"><!-- start side bar 1st column-->
			<div class="sidebar-sticky">
				<ul class="nav flex-column" style="font-weight: bold;">
					<li class="nav-item" ><a class="nav-link"  href="dashboard.php"><img src="https://img.icons8.com/metro/24/000000/dashboard.png"/> Dashboard</a></li>
					<li class="nav-item"><a class="nav-link" href="workorder.php"><img src="https://img.icons8.com/pastel-glyph/24/000000/purchase-order.png"/>Work Order</a></li>
					<li class="nav-item"><a class="nav-link" href="requests.php"><img src="https://img.icons8.com/material-sharp/24/000000/code-fork.png"/>Requests</a></li>
					<li class="nav-item"><a class="nav-link" href="Assests.php"><img src="https://img.icons8.com/android/24/000000/stack.png"/> Assests</a></li>
					<li class="nav-item"><a class="nav-link" href="technicians.php"><img src="https://img.icons8.com/android/24/000000/worker-male.png"/>Technicians</a></li>
					<li class="nav-item"><a class="nav-link bg-danger" style="color: white;" href="requester.php"><img src="https://img.icons8.com/ios-filled/24/000000/community-grants.png"/> Requester</a></li>
					<li class="nav-item"><a class="nav-link" href="sellreport.php"><img src="https://img.icons8.com/metro/24/000000/self-service-kiosk.png"/> Sell Report</a></li>
					<li class="nav-item"><a class="nav-link" href="workreport.php"><img src="https://img.icons8.com/material-rounded/24/000000/business-report.png"/> Work Report</a></li>
					<li class="nav-item"><a class="nav-link" href="changepassword.php"><img src="https://img.icons8.com/android/24/000000/key.png"/>Change Password</a></li>
					<li class="nav-item"><a class="nav-link" href="../logout.php"><img src="https://img.icons8.com/metro/24/000000/export.png"/> Log Out</a></li>
				</ul>
			</div>
		</nav><!-- end side bar 1st column-->
		
		<div class="col-sm-5">
			<h3 class="text-center">Update Requester Details</h3>
			<?php

			if(isset($_REQUEST['editr']))
			{ 	
				$sql = "SELECT * FROM requesterlogin_tb WHERE r_login_id = {$_REQUEST['id']}";

				$result = $conn->query($sql);
				$row = $result->fetch_assoc();
				if(isset($_REQUEST['update']))
				{ echo "string";
				if(($_REQUEST['r_name'] == "") || ($_REQUEST['r_email'] == ""))
				{
					$msg = '<div class="alert alert-warning col-sm-6 mt-3" role="alert">All fields are Required</div>';
				}
				else
				{
					$rid = $_REQUEST['r_login_id'];
					$rname = $_REQUEST['r_name'];
					$remail = $_REQUEST['r_email'];
					$sql = "UPDATE requesterlogin_tb SET r_name='$rname' , r_email = '$remail' WHERE r_login_id='$rid'";
				if($conn->query($sql) == TRUE)
				{
					$msg = '<div class="alert alert-success col-sm-6 mt-3" role="alert">Updated Successfully</div>';
				}	
				else
				{
					$msg = '<div class="alert alert-warning col-sm-6 mt-3" role="alert">Unable to Update</div>';
				}
			}
		}
	?>
			<form action="" method="POST">
				<div>
					<label>Request ID</label><br>
					<input type="text" name="r_login_id" id="r_login_id" class="form-control" value="<?php if(isset($row['r_login_id'])) echo $row['r_login_id'];?>" readonly>
				</div>
				<div>
					<label>Name</label><br>
					<input type="text" name="r_name" id="r_name" class="form-control" value="<?php if(isset($row['r_name'])) echo $row['r_name'];?>">
				</div>
				<div>
					<label>E-mail</label><br>
					<input type="email" name="r_email" id="r_email" class="form-control" value="<?php if(isset($row['r_email'])) echo $row['r_email'];?>">
				</div>
				<div class="mt-3">
					<button type="submit" class="btn btn-danger mr-3" name="update" id="update">Update</button>
					<a href="requester.php" class="btn btn-dark">Close</a>
				</div>
				<?php 
				if(isset($msg))
				{
					echo $msg;
				}
				?>
			</form>
		</div>
	<?php }?>
		</div><!-- end row-->
</div><!--end container-->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.css"></script>
</body>
</html>