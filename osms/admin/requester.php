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
		<!--  start 2nd column-->
		<div class="col-sm-9  text-center">
			<p class="bg-dark text-white text-center">List of Requesters</p>
			<?php
			$sql = "SELECT * FROM requesterlogin_tb";
			$result = $conn->query($sql);
			if($result->num_rows > 0)
			{
				echo '<table class="table">';
					echo '<thead>';
						echo '<tr>';
							echo '<th>Request ID</th>';
							echo '<th>Name</th>';
							echo '<th>Email</th>';
							echo '<th>Action</th>';
						echo '</tr>';
					echo '</thead>';
					echo '<tbody>';
						while($row = $result->fetch_assoc())
						{
						echo '<tr>';
							echo '<td>'.$row['r_login_id'].'</td>';
							echo '<td>'.$row['r_name'].'</td>';
							echo '<td>'.$row['r_email'].'</td>';
							echo '<td>';
								echo '<form action="updaterequester.php" method="POST" class="d-inline mr-3">';
									echo '<input type="hidden" name="id" value='.$row['r_login_id'].'><button class="btn btn-primary" type="submit" name="editr" value="Edit"><img src="https://img.icons8.com/android/24/000000/pencil.png"/>';
									echo '</form>';
									echo '<form action="" method="POST">';
										echo '<input type="hidden" name="id" value='.$row['r_login_id'].'><button type="submit" class="btn btn-dark" name="delete" value="Delete"><img src="https://img.icons8.com/material-outlined/24/000000/delete-trash.png"/>';
									echo '</form>';
								echo '</td>'; 
							echo '</tr>';
							}
						echo '</tbody>';
					echo '</table>';
				}
				else
				{
					echo 'Result 0';
				}
				if(isset($_REQUEST['delete']))
				{
					$sql = "DELETE FROM requesterlogin_tb WHERE r_login_id={$_REQUEST['id']}";
					if($conn->query($sql))
					{
						echo '<meta http-equiv="referesh" content="0;URL=?deleted"/>';
					}
					else
					{
						echo "Unable to Delete";
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