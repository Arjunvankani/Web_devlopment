<?php
include('../connection.php');
if(isset($_REQUEST['psubmit']))
{
	if(($_REQUEST['cname'] == "") || ($_REQUEST['cadd'] == "") || ($_REQUEST['cpquantity'] == "") || ($_REQUEST['cpeach'] == "") || ($_REQUEST['cptotal'] == "") || ($_REQUEST['cpdate'] == ""))
	{
		$msg = '<div class="alert alert-warning col-sm-6 mt-3" role="alert">All fields are Required</div>';
	}
	else
	{
		$pid = $_REQUEST['pid'];
		$pava = $_REQUEST['pava'] - $_REQUEST['cpquantity'];	
		$cname = $_REQUEST['cname'];
		$cadd = $_REQUEST['cadd'];
		$cpname = $_REQUEST['cpname'];
		$cpquantity = $_REQUEST['cpquantity'];
		$cpeach = $_REQUEST['cpeach'];
		$cptotal = $_REQUEST['cptotal'];
		$cpdate = $_REQUEST['cpdate'];
		$sql = "INSERT INTO customer_tb(cname,cadd,cpname,cpquantity,cpeach,cptotal,cpdate) VALUES('$cname','$cadd','$cpname','$cpquantity','$cpeach','$cptotal','$cpdate')";
		if($conn->query($sql) == TRUE)
		{
			$genid = mysqli_insert_id($conn);
			session_start();
			$_SESSION['myid'] = $genid;
			echo "<script>location.href='productsellsuccess.php';</script>";
		}
		$sqlup = "UPDATE assests_tb SET pava = '$pava' WHERE pid = '$pid'";
		$conn->query($sqlup); 
		
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Selling Area</title>
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
					<li class="nav-item" ><a class="nav-link " href="dashboard.php"><img src="https://img.icons8.com/metro/24/000000/dashboard.png"/> Dashboard</a></li>
					<li class="nav-item"><a class="nav-link" href="workorder.php"><img src="https://img.icons8.com/pastel-glyph/24/000000/purchase-order.png"/>Work Order</a></li>
					<li class="nav-item"><a class="nav-link" href="requests.php"><img src="https://img.icons8.com/material-sharp/24/000000/code-fork.png"/>Requests</a></li>
					<li class="nav-item"><a class="nav-link bg-danger" style="color: white;" href="Assests.php"><img src="https://img.icons8.com/android/24/000000/stack.png"/> Assests</a></li>
					<li class="nav-item"><a class="nav-link" href="technicians.php"><img src="https://img.icons8.com/android/24/000000/worker-male.png"/>Technicians</a></li>
					<li class="nav-item"><a class="nav-link" href="requester.php"><img src="https://img.icons8.com/ios-filled/24/000000/community-grants.png"/> Requester</a></li>
					<li class="nav-item"><a class="nav-link" href="sellreport.php"><img src="https://img.icons8.com/metro/24/000000/self-service-kiosk.png"/> Sell Report</a></li>
					<li class="nav-item"><a class="nav-link" href="workreport.php"><img src="https://img.icons8.com/material-rounded/24/000000/business-report.png"/> Work Report</a></li>
					<li class="nav-item"><a class="nav-link" href="changepassword.php"><img src="https://img.icons8.com/android/24/000000/key.png"/>Change Password</a></li>
					<li class="nav-item"><a class="nav-link" href="../logout.php"><img src="https://img.icons8.com/metro/24/000000/export.png"/> Log Out</a></li>
				</ul>
			</div>
		</nav><!-- end side bar 1st column-->

		<div class="col-sm-9 col-md-6 jumbotron" >
			<h3 class="text-center">Customer Bill</h3>
			<?php 
			if(isset($_REQUEST['sell']))
			{
				$sql = "SELECT * FROM assests_tb WHERE pid = {$_REQUEST['id']}";
				$result = $conn->query($sql);
				$row = $result->fetch_assoc();

			}
			
			?>
			<form class="mx-5" action="" method="POST" >
				<div class="fomr-group mt-2">
					<label>Product  ID</label><br>
					<input type="text" id="pid" name="pid" class="form-control" value="<?php if(isset($row['pid'])) echo $row['pid'];?>" readonly>
				</div>
				<div class="fomr-group mt-2">
					<label>Customer Name</label><br>
					<input type="text" name="cname" class="form-control">
				</div>
				<div class="fomr-group mt-2">
					<label>Customer Address</label><br>
					<input type="text" name="cadd" class="form-control">
				</div>
				<div class="fomr-group mt-2">
					<label>Product Name</label><br>
					<input type="text" id="pname" name="cpname" class="form-control" value="<?php if(isset($row['pname'])) echo $row['pname'];?>" readonly>
				</div>
				<div class="fomr-group mt-2">
					<label>Availablity</label><br>
					<input type="text"  name="pava" class="form-control" value="<?php if(isset($row['pava'])) echo $row['pava'];?>" readonly>
				</div>
				<div class="fomr-group mt-2">
					<label>Qantity</label><br>
					<input type="text" name="cpquantity" class="form-control">
				</div>
				<div class="fomr-group mt-2">
					<label>Price Each</label><br>
					<input type="text" name="cpeach" class="form-control">
				</div>
				<div class="fomr-group mt-2">
					<label>Total Cost</label><br>
					<input type="text" name="cptotal" class="form-control">
				</div>
				<div class="fomr-group mt-2">
					<label>Date</label><br>
					<input type="date" name="cpdate" class="form-control">
				</div>
				<div class="fomr-group mt-2">
					<button name="psubmit" class="btn btn-danger">Submit</button>
					<a href="assests.php" class="btn btn-dark">Close</a>
				</div>
				<?php 
				if(isset($msg))
				{
					echo $msg;
				}
				?>
			</form>
		</div>
		<!--  end 2nd column-->
		<!--  end 2nd column-->
	</div><!-- end row-->
</div><!--end container-->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.css"></script>
</body>
</html>