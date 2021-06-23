<?php 
include('../connection.php');
session_start();		
if($_SESSION['is_login'])
{
	$remail = $_SESSION['remail'];
}
else
{
	echo "<script>location.href='requesterlogin.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Service Status</title>
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
		<nav class="col-sm-2 bg-light sidebar py-2 d-print-none"><!-- start side bar 1st column-->
			<div class="sidebar-sticky">
				<ul class="nav flex-column" style="font-weight: bold;">
					<li class="nav-item" ><a class="nav-link "  href="requesterprofile.php"><img src="https://img.icons8.com/material-sharp/24/000000/user.png"/>Profile</a></li>
					<li class="nav-item"><a class="nav-link" href="submitrequest.php"><img src="https://img.icons8.com/windows/24/000000/request-service.png"/>Submit Request</a></li>
					<li class="nav-item"><a class="nav-link bg-danger" style="color: white;" href="servicestatus.php"><img src="https://img.icons8.com/material-sharp/24/000000/timer.png"/>Service Status</a></li>
					<li class="nav-item"><a class="nav-link" href="changepassword.php"><img src="https://img.icons8.com/android/24/000000/key.png"/>Change Password</a></li>
					<li class="nav-item"><a class="nav-link" href="../logout.php"><img src="https://img.icons8.com/metro/24/000000/export.png"/>Log Out</a></li>
				</ul>
			</div>
		</nav><!-- end side bar 1st column-->
		<!--start 2nd column-->
		<div class="col-sm-6 mx-3">
			<form action="" method="POST" class="form-inline d-print-none">
				<div class="form-group">
					<label for="checkid">Enter Request ID: </label>
					<input type="text" name="checkid" id="checkid"  class="form-control ml-2">
				</div>
				<button type="submit" class="btn btn-danger ml-4">Search</button>
			</form>
			<?php
			if(isset($_REQUEST['checkid']))
			{
				if($_REQUEST['checkid'] == ""){
					$msg = '<div class="alert alert-warning mt-5">Please enter your Request id</div>';
				}
				else
				{
				$sql = "SELECT * FROM assignwork_tb WHERE request_id = {$_REQUEST['checkid']}";
				$result = $conn->query($sql);
				$row = $result->fetch_assoc();
				if(($row['request_id'] == $_REQUEST['checkid']))
				{?>
			<h3 class="text-center mt-5">Assigned Work Details</h3>
			<table class="table table-bordered">
				<tbody>
					<tr>
						<td>Request ID</td>
						<td><?php if(isset($row['request_id'])){echo $row['request_id'];}?></td>
					</tr>
					<tr>
						<td>Request Info</td>
						<td><?php if(isset($row['request_info'])){echo $row['request_info'];}?></td>
					</tr>
					<tr>
						<td>Request Description</td>
						<td><?php if(isset($row['request_description'])){echo $row['request_description'];}?></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><?php if(isset($row['requester_name'])){echo $row['requester_name'];}?></td>
					</tr>
					<tr>
						<td>Address Line 1</td>
						<td><?php if(isset($row['requester_add1'])){echo $row['requester_add1'];}?></td>
					</tr>
					<tr>
						<td>Address Line 2</td>
						<td><?php if(isset($row['requester_add2'])){echo $row['requester_add2'];}?></td>
					</tr>
					<tr>
						<td>City</td>
						<td><?php if(isset($row['requester_city'])){echo $row['requester_city'];}?></td>
					</tr>
					<tr>
						<td>State</td>
						<td><?php if(isset($row['requester_state'])){echo $row['requester_state'];}?></td>
					</tr>
					<tr>
						<td>Zip Code</td>
						<td><?php if(isset($row['requester_zip'])){echo $row['requester_zip'];}?></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><?php if(isset($row['requester_name'])){echo $row['requester_name'];}?></td>
					</tr>
					<tr>
						<td>E-Mail</td>
						<td><?php if(isset($row['requester_email'])){echo $row['requester_email'];}?></td>
					</tr>
					<tr>
						<td>Mobile Number</td>
						<td><?php if(isset($row['requester_mobile'])){echo $row['requester_mobile'];}?></td>
					</tr>
					<tr>
						<td>Technician Name</td>
						<td><?php if(isset($row['assign_tech'])){echo $row['assign_tech'];}?></td>
					</tr>
					<tr>
						<td>Customer's Signature</td>
						<td></td>
					</tr>
					<tr>
						<td>Customer's Signature</td>
						<td></td>
					</tr>
				</tbody>
			</table>
			<div class="text-center">
				<form action="" class="d-print-none">
					<input type="submit" name="" value="Print" class="btn btn-danger" onclick="window.print()">
					<input type="submit" name="" value="Close" class="btn btn-secondary ml-3">
				</form>
			</div>
		<?php }
		else
			{
				echo '<div class="alert alert-info mt-5">Your request is still pending</div>';
			}
		}
		}?>
		<?php if(isset($msg))
			{
				echo $msg;
			}
			?>
		</div>
		<!--end 2nd column-->
	</div><!-- end row-->
</div><!--end container-->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.css"></script>
</body>
</html>