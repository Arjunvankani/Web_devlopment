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
	<title>Sell Report</title>
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
					<li class="nav-item"><a class="nav-link" href="workorder.php"><img src="https://img.icons8.com/pastel-glyph/24/000000/purchase-order.png"/>Work Order</a></li>
					<li class="nav-item"><a class="nav-link" href="requests.php"><img src="https://img.icons8.com/material-sharp/24/000000/code-fork.png"/>Requests</a></li>
					<li class="nav-item"><a class="nav-link" href="Assests.php"><img src="https://img.icons8.com/android/24/000000/stack.png"/> Assests</a></li>
					<li class="nav-item"><a class="nav-link" href="technicians.php"><img src="https://img.icons8.com/android/24/000000/worker-male.png"/>Technicians</a></li>
					<li class="nav-item"><a class="nav-link" href="requester.php"><img src="https://img.icons8.com/ios-filled/24/000000/community-grants.png"/> Requester</a></li>
					<li class="nav-item"><a class="nav-link bg-danger" style="color: white;" href="sellreport.php"><img src="https://img.icons8.com/metro/24/000000/self-service-kiosk.png"/> Sell Report</a></li>
					<li class="nav-item"><a class="nav-link" href="workreport.php"><img src="https://img.icons8.com/material-rounded/24/000000/business-report.png"/> Work Report</a></li>
					<li class="nav-item"><a class="nav-link" href="changepassword.php"><img src="https://img.icons8.com/android/24/000000/key.png"/>Change Password</a></li>
					<li class="nav-item"><a class="nav-link" href="../logout.php"><img src="https://img.icons8.com/metro/24/000000/export.png"/> Log Out</a></li>
				</ul>
			</div>
		</nav><!-- end side bar 1st column-->
		<!--  start 2nd column-->
		<div class="col-sm-9 col-md-10 text-center">
			<form action="" method="POST" class="d-print-none">
				<div class="form-row">
					<div class="form-group col-md-2">
						<input type="date" name="startdate" class="form-control" id="startdate">
					</div><span> to </span>
					<div class="form-group col-md-2">
						<input type="date" name="enddate" class="form-control" id="enddate">
					</div>
					<div class="form-group col-md-2">
						<input type="submit" name="searchsubmit" class="btn btn-secondary" value="Search">
					</div>
				</div>
			</form>
			<?php
			if(isset($_REQUEST['searchsubmit']))
			{
					$startdate = $_REQUEST['startdate'];
					$enddate = $_REQUEST['enddate'];
					$sql = "SELECT * FROM customer_tb WHERE cpdate BETWEEN '$startdate' AND '$enddate'";
					$result = $conn->query($sql);
					if($result->num_rows > 0)
					{
						echo '<p class="bg-dark text-white">Details</p>';
						echo '<table class="table">';
							echo '<thead>';
								echo '<tr>';
									echo '<th scope="col">Customer ID</th>';
									echo '<th scope="col">Customer Name</th>';
									echo '<th scope="col">Address</th>';
									echo '<th scope="col">Product Name</th>';
									echo '<th scope="col">Quantity</th>';
									echo '<th scope="col">Price Each</th>';
									echo '<th scope="col">Total</th>';
									echo '<th scope="col">Date</th>';
								echo '</tr>';
							echo '</thead>';
							echo '<tbody>';
							while($row=$result->fetch_assoc())
							{
								echo '<tr>';
									echo '<td>'.$row['cid'].'</td>';
									echo '<td>'.$row['cname'].'</td>';
									echo '<td>'.$row['cadd'].'</td>';
									echo '<td>'.$row['cpname'].'</td>';
									echo '<td>'.$row['cpquantity'].'</td>';
									echo '<td>'.$row['cpeach'].'</td>';
									echo '<td>'.$row['cptotal'].'</td>';
									echo '<td>'.$row['cpdate'].'</td>';
								echo '</tr>';
							}
							echo '<tr>';
								echo '<td>';
									echo '<input type="submit" class="btn btn-danger d-print-none" value="Print" onClick="window.print()">';
								echo '</td>';
							echo '</tr>';
							echo '</tbody>';
						echo '</table>';
					}
					else
					{
						echo "<div class='alert alert-warning col-sm-6 ml-5 mt-2' role='alert'>No Resords Found</div>";
					}
			}
			?>
		</div>
		<!--  end 2nd column-->
	</div><!-- end row-->
</div><!--end container-->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.css"></script>
</body>
</html>