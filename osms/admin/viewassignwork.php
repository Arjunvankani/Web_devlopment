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
	<title>Work Order</title>
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
					<li class="nav-item" ><a class="nav-link"  href="dashboard.php"><img src="https://img.icons8.com/metro/24/000000/dashboard.png"/> Dashboard</a></li>
					<li class="nav-item"><a class="nav-link bg-danger" style="color: white;" href="workorder.php"><img src="https://img.icons8.com/pastel-glyph/24/000000/purchase-order.png"/>Work Order</a></li>
					<li class="nav-item"><a class="nav-link" href="requests.php"><img src="https://img.icons8.com/material-sharp/24/000000/code-fork.png"/>Requests</a></li>
					<li class="nav-item"><a class="nav-link" href="Assests.php"><img src="https://img.icons8.com/android/24/000000/stack.png"/> Assests</a></li>
					<li class="nav-item"><a class="nav-link" href="technicians.php"><img src="https://img.icons8.com/android/24/000000/worker-male.png"/>Technicians</a></li>
					<li class="nav-item"><a class="nav-link" href="requester.php"><img src="https://img.icons8.com/ios-filled/24/000000/community-grants.png"/> Requester</a></li>
					<li class="nav-item"><a class="nav-link" href="sellreport.php"><img src="https://img.icons8.com/metro/24/000000/self-service-kiosk.png"/> Sell Report</a></li>
					<li class="nav-item"><a class="nav-link" href="workreport.php"><img src="https://img.icons8.com/material-rounded/24/000000/business-report.png"/> Work Report</a></li>
					<li class="nav-item"><a class="nav-link" href="changepassword.php"><img src="https://img.icons8.com/android/24/000000/key.png"/>Change Password</a></li>
					<li class="nav-item"><a class="nav-link" href="../logout.php"><img src="https://img.icons8.com/metro/24/000000/export.png"/> Log Out</a></li>
				</ul>
			</div>
		</nav><!-- end side bar 1st column-->
		<div class="col-sm-6 mx-3">
			<h3 class="text-center mt-5">Assigned Work Details</h3>
			<?php
			if(isset($_REQUEST['view']))
			{
				$sql = "SELECT * FROM assignwork_tb WHERE request_id = {$_REQUEST['id']}";
				$result = $conn->query($sql);
				$row = $result->fetch_assoc();?>
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
				<form action="" class="d-print-none d-inline">
					<input type="submit" name="" value="Print" class="btn btn-danger" onclick="window.print()"></form>
					<form action="workorder.php" class="d-print-none d-inline"><input type="submit" name="" value="Close" class="btn btn-secondary ml-3">
				</form>
			</div>
		<?php }
		?>
		</div>
		</div><!-- end row-->
</div><!--end container-->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.css"></script>
</body>
</html>