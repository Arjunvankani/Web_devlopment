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
$sql = "SELECT * FROM submitrequest_tb";
$result = $conn->query($sql);
$submitrequest = $result->num_rows;

$sql = "SELECT * FROM assignwork_tb";
$result = $conn->query($sql);
$assignwork = $result->num_rows;

$sql = "SELECT * FROM technician_tb";
$result = $conn->query($sql);
$technicians = $result->num_rows;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
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
					<li class="nav-item" ><a class="nav-link bg-danger" style="color: white;" href="dashboard.php"><img src="https://img.icons8.com/metro/24/000000/dashboard.png"/> Dashboard</a></li>
					<li class="nav-item"><a class="nav-link" href="workorder.php"><img src="https://img.icons8.com/pastel-glyph/24/000000/purchase-order.png"/>Work Order</a></li>
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
		<div class="col-sm-9 col-md-10"><!-- start od dashboard-->
			<div class="row text-center mx-5">
				<div class="col-sm-4">
					<div class="card text-white bg-danger mb-3">
						<div class="card-header"> Request Recieved</div>
						<div class="card-body"></div>
						<h4 class="card-title"><?php echo $submitrequest;?></h4>
						<a class="btn text-white" href="requests.php">View</a>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card text-white bg-success mb-3">
						<div class="card-header">Assigned Work</div>
						<div class="card-body"></div>
						<h4 class="card-title"><?php echo $assignwork;?></h4>
						<a class="btn text-white" href="workorder.php">View</a>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card text-white bg-primary mb-3">
						<div class="card-header">No. of Technicians</div>
						<div class="card-body"></div>
						<h4 class="card-title"><?php echo $technicians;?></h4>
						<a class="btn text-white" href="technicians.php">View</a>
					</div>
				</div>
			</div>	
			<div class="mx-5 mt-5 text-center">
				<p class="bg-dark text-white">List of Requesters</p>
			<?php
				$sql = "SELECT * FROM requesterlogin_tb ";
				$result = $conn->query($sql);
				if($result->num_rows > 0)
				{
					echo'<table class="table">
						<thead>
							<tr>
								<th scope="col">Requester ID</th>
								<th scope="col">Name</th>
								<th scope="col">Email</th>
							</tr>
						</thead>
						<tbody>';
						while ($row = $result->fetch_assoc())
						 {
						echo'<tr>';
								echo '<td>'.$row["r_login_id"].'</td>';
								echo '<td>'.$row["r_name"].'</td>';
								echo '<td>'.$row["r_email"].'</td>';
						echo'</tr>';
						}
						echo '</tbody>
					</table>';
				}
				else
				{
					echo '0 Results'; 
				}
			?>
			</div>		
		</div>
		<!--  end profile area 2nd column-->
	</div><!-- end row-->
</div><!--end container-->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.css"></script>
</body>
</html>
