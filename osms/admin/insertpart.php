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
	<title>Insert Part</title>
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
					<li class="nav-item"><a class="nav-link bg-danger" style="color: white;"  href="Assests.php"><img src="https://img.icons8.com/android/24/000000/stack.png"/> Assests</a></li>
					<li class="nav-item"><a class="nav-link " href="technicians.php"><img src="https://img.icons8.com/android/24/000000/worker-male.png"/>Technicians</a></li>
					<li class="nav-item"><a class="nav-link" href="requester.php"><img src="https://img.icons8.com/ios-filled/24/000000/community-grants.png"/> Requester</a></li>
					<li class="nav-item"><a class="nav-link" href="sellreport.php"><img src="https://img.icons8.com/metro/24/000000/self-service-kiosk.png"/> Sell Report</a></li>
					<li class="nav-item"><a class="nav-link" href="workreport.php"><img src="https://img.icons8.com/material-rounded/24/000000/business-report.png"/> Work Report</a></li>
					<li class="nav-item"><a class="nav-link" href="changepassword.php"><img src="https://img.icons8.com/android/24/000000/key.png"/>Change Password</a></li>
					<li class="nav-item"><a class="nav-link" href="../logout.php"><img src="https://img.icons8.com/metro/24/000000/export.png"/> Log Out</a></li>
				</ul>
			</div>
		</nav><!-- end side bar 1st column-->
		<div class="col-sm-6">
			<h3 class="text-center">Add New Part</h3>
			<?php 
			if(isset($_REQUEST['pinsert']))
			{
				if(($_REQUEST['pname'] == "") || ($_REQUEST['pdop'] == "") || ($_REQUEST['pava'] == "") || ($_REQUEST['ptotal'] == "") || ($_REQUEST['porignalcost'] == "") || ($_REQUEST['psellingcost'] == ""))
				{
					$msg = '<div class="alert alert-warning col-sm-6 mt-3" role="alert">All fields are Required</div>';
				}
				else
				{
					$pname = $_REQUEST['pname'];
					$pdop = $_REQUEST['pdop'];
					$pava = $_REQUEST['pava'];
					$ptotal = $_REQUEST['ptotal'];
					$porignalcost = $_REQUEST['porignalcost'];
					$psellingcost = $_REQUEST['psellingcost'];
					$sql = "INSERT INTO assests_tb(pname,pdop,pava,ptotal,porignalcost,psellingcost) VALUES('$pname','$pdop','$pava','$ptotal','$porignalcost','$psellingcost')";
					if($conn->query($sql)==TRUE)
					{
					$msg = '<div class="alert alert-success mt-2"role="alert">Part added Successfuly</div>';
					}
					else
					{
						$msg = '<div class="alert alert-danger mt-2"role="alert">Unable add parts</div>';
					}
				}
			}
			?>
			<div class="col-sm-9 mt-5 mx-3 jumbotron">
				<h3 class="text-center bg-dark text-white">Add New Part</h3>
				<form action="" method="POST">
					<div class="form-group">
						<label for="pname">Product Name</label><br>
						<input type="text" name="pname" class="form-control">
					</div>
					<div class="form-group">
						<label for="pdop">Date of Purchase</label><br>
						<input type="date" name="pdop" class="form-control">
					</div>
					<div class="form-group">
						<label for="pava">Availablity</label><br>
						<input type="text" name="pava" class="form-control">
					</div>
					<div class="form-group">
						<label for="ptotal">Total</label><br>
						<input type="text" name="ptotal" class="form-control">
					</div>
					<div class="form-group">
						<label for="porignalcost">Orignal Cost</label><br>
						<input type="text" name="porignalcost" class="form-control">
					</div>
					<div class="form-group">
						<label for="psellingcost">Selling Cost</label><br>
						<input type="text" name="psellingcost" class="form-control">
					</div>
					<div class="text-center">
						<button type="submit" name="pinsert" class="btn btn-danger">Submit</button>
						<a href="assests.php" class="btn btn-dark">Close</a>
					</div>
				</form>
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