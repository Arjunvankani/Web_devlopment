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
	<title>Insert Technicain</title>
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
					<li class="nav-item"><a class="nav-link bg-danger" style="color: white;" href="technicians.php"><img src="https://img.icons8.com/android/24/000000/worker-male.png"/>Technicians</a></li>
					<li class="nav-item"><a class="nav-link" href="requester.php"><img src="https://img.icons8.com/ios-filled/24/000000/community-grants.png"/> Requester</a></li>
					<li class="nav-item"><a class="nav-link" href="sellreport.php"><img src="https://img.icons8.com/metro/24/000000/self-service-kiosk.png"/> Sell Report</a></li>
					<li class="nav-item"><a class="nav-link" href="workreport.php"><img src="https://img.icons8.com/material-rounded/24/000000/business-report.png"/> Work Report</a></li>
					<li class="nav-item"><a class="nav-link" href="changepassword.php"><img src="https://img.icons8.com/android/24/000000/key.png"/>Change Password</a></li>
					<li class="nav-item"><a class="nav-link" href="../logout.php"><img src="https://img.icons8.com/metro/24/000000/export.png"/> Log Out</a></li>
				</ul>
			</div>
		</nav><!-- end side bar 1st column-->
		<div class="col-sm-6">
			<h3 class="text-center">Add New Technicians</h3>
			<?php 
			if(isset($_REQUEST['add']))
			{
				if(($_REQUEST['empname'] == "") || ($_REQUEST['empcity'] == "") || ($_REQUEST['empmobile'] == "") || ($_REQUEST['empemail'] == ""))
				{
					$msg = '<div class="alert alert-warning col-sm-6 mt-3" role="alert">All fields are Required</div>';
				}
				else
				{
					$ename = $_REQUEST['empname'];
					$ecity = $_REQUEST['empcity'];
					$emobile = $_REQUEST['empmobile'];
					$eemail = $_REQUEST['empemail'];
					$sql = "INSERT INTO technician_tb(empname,empcity,empmobile,empemail) VALUES('$ename','$ecity','$emobile','$eemail')";
					if($conn->query($sql)==TRUE)
					{
					$msg = '<div class="alert alert-success mt-2"role="alert">Account sucessfully created</div>';
					}
					else
					{
						$msg = '<div class="alert alert-danger mt-2"role="alert">Unable to create account</div>';
					}
				}
			}
			?>
			<form action="" method="POST">
				<div>
					<label>Name</label><br>
					<input type="text" name="empname" id="empname" class="form-control" value="<?php if(isset($row['empname'])) echo $row['empname'];?>">
				</div>
				<div>
					<label>City</label><br>
					<input type="text" name="empcity" id="empcity" class="form-control" value="<?php if(isset($row['empcity'])) echo $row['empcity'];?>">
				</div>
				<div>
					<label>Number</label><br>
					<input type="text" name="empmobile" id="empmobile" class="form-control" value="<?php if(isset($row['empmobile'])) echo $row['empmobile'];?>">
				</div>
				<div>
					<label>E-mail</label><br>
					<input type="email" name="empemail" id="empemail" class="form-control" value="<?php if(isset($row['empemail'])) echo $row['empemail'];?>">
				</div>
				<div class="mt-3">
					<button type="submit" class="btn btn-danger mr-3" name="add" id="add">Add</button>
					<a href="requester.php" class="btn btn-dark">Close</a>
				</div>
				<?php 
				if(isset($msg))
				{
					echo $msg;
				}
				?>

		</div>
		</div>
		<!--  end 2nd column-->
		<div class="float-right" style="margin-top: 400px;"><a href="inserttemp.php" ><img src="https://img.icons8.com/plasticine/100/000000/plus.png"/></a></div>
	</div><!-- end row-->
</div><!--end container-->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.css"></script>
</body>
</html>