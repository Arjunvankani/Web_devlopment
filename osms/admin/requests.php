<?php
include('../connection.php');
session_start();
if(isset($_SESSION['is_adminlogin']))
{
	$aemail = $_SESSION['aemail'];
}
else
{
	echo "<script> location.href='login.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Requests</title>
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
					<li class="nav-item"><a class="nav-link bg-danger" style="color: white;" href="requests.php"><img src="https://img.icons8.com/material-sharp/24/000000/code-fork.png"/>Requests</a></li>
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
		<!--  stare  2nd column-->
		<div class="col-sm-4">
			<?php 
				$sql = "SELECT request_id,request_info,request_description,request_date FROM submitrequest_tb";
				$result = $conn->query($sql);
				if($result->num_rows > 0)
				{
					while($row = $result->fetch_assoc())
					{
						echo '<div class="card mt-5 mx-5">';
							echo '<div class="card-header">';
								echo 'Request ID:'.$row['request_id'];	
							echo '</div>';
						echo '<div class="card-body">';
							echo '<h5 class="card-title">Request Info: '.$row['request_info'];
							echo '</h5>';
							echo '<p class="card-text">Request Description: '.$row['request_description'];
							echo '</p>';
							echo '<p class="card-text">Request Date: '.$row['request_date'];
							echo '</p>';
							echo '<div class="float-right">';
								echo '<form actio="" method="POST">';
									echo '<input type="hidden" name="id" value='.$row["request_id"].'>';
									echo '<input type="hidden" name="info" value='.$row["request_info"].'>';
									echo '<input type="hidden" name="description" value='.$row["request_description"].'>';
									echo '<input type="submit" class="btn btn-danger mt-2 " value="View" name="view">'; 
									echo '<input type="submit" class="btn btn-dark mt-2 ml-2" value="Close" name="close">'; 
								echo '</form>';
							echo '</div>';
						echo '</div>';
						echo '</div>';
					}
				}
			?>
		</div>
		<!--  end  2nd column-->
		<?php
		if(isset($_REQUEST['view']))
		{ 
			$sql = "SELECT * FROM submitrequest_tb WHERE request_id = {$_REQUEST['id']}";
		$result = $conn->query($sql);		
		$row = $result->fetch_assoc();	
		}
		if(isset($_REQUEST['close']))
		{
			$sql = "DELETE FROM submitrequest_tb WHERE request_id = {$_REQUEST['id']}";
			if($conn->query($sql) == TRUE)
			{
			echo '<meta http-equiv="refersh" content = "0;URL=?closed"/>';
			}
			else
			{
				echo "Unable to delete";
			}
		} 
		if(isset($_REQUEST['assign']))
		{
			if(($_REQUEST['request_id'] == "") || ($_REQUEST['requester_info'] == "") || ($_REQUEST['request_description'] == "") || ($_REQUEST['requester_name'] == "") || ($_REQUEST['requester_add1'] == "") || ($_REQUEST['requester_add2'] == "") || ($_REQUEST['requester_city'] == "") || ($_REQUEST['requester_state'] == "") || ($_REQUEST['requester_zip'] == "") || ($_REQUEST['requester_email'] == "") || ($_REQUEST['requester_mobile'] == "") || ($_REQUEST['assign_tech'] == "") || ($_REQUEST['assign_date'] == ""))
			{ 
				$msg = '<div class="alert alert-warning col-sm-6 mt-2">All fields are required</div>';
			}
			else
			{
				$rno = $_REQUEST['request_id'];
				$rinfo = $_REQUEST['requester_info'];
				$rdesc = $_REQUEST['request_description'];
				$rname = $_REQUEST['requester_name'];
				$radd1 = $_REQUEST['requester_add1'];
				$radd2 = $_REQUEST['requester_add2'];
				$rcity = $_REQUEST['requester_city'];
				$rstate = $_REQUEST['requester_state'];
				$rzip = $_REQUEST['requester_zip'];
				$remail = $_REQUEST['requester_email'];
				$rmobile = $_REQUEST['requester_mobile'];
				$atech = $_REQUEST['assign_tech'];
				$adate = $_REQUEST['assign_date'];
				$sql = "INSERT INTO assignwork_tb(request_id,request_info,request_description,requester_name,requester_add1,requester_add2,requester_city,requester_state,requester_zip,requester_email,requester_mobile,assign_tech,assign_date) VALUES('$rno','$rinfo','$rdesc','$rname','$radd1','$radd2','$rcity','$rstate','$rzip','$remail','$rmobile','$atech','$adate')";
				if($conn->query($sql) == TRUE)
				{
					$msg = '<div class="alert alert-success col-sm-6 mt-2"role="alert">Assigned Successfully</div>';
				}
				else
				{
					$msg = '<div class="alert alert-danger col-sm-6 mt-2"role="alert">Unable to Assign</div>';
				}
			}
		}
		?>
		<!--  start  3nd column-->
		<div class=" col-sm-5 jumbotron">
			<form action="" method="POST">
				<h5 class="text-center">Assign Work Order Request</h5>
				<div class="form-group">
					<label>Request ID</label><br>
					<input type="text" name="request_id" id="request_id" class="form-control" 
					value="<?php if(isset($row['request_id']))echo $row['request_id'];?>" readonly>
				</div>
				<div class="form-group">
					<label>Request Info</label><br>
					<input type="text" name="requester_info" class="form-control" value="<?php if(isset($row['request_info']))echo $row['request_info'];?>">
				</div>
				<div class="form-group">
					<label>Description</label><br>
					<input type="text" name="request_description" class="form-control" value="<?php if(isset($row['request_description']))echo $row['request_description'];?>">
				</div>
				<div class="form-group">
					<label>Name</label><br>
					<input type="text" name="requester_name" class="form-control" value="<?php if(isset($row['requester_name']))echo $row['requester_name'];?>">
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Address Line 1</label><br>
						<input type="text" name="requester_add1" class="form-control" value="<?php if(isset($row['requester_add1']))echo $row['requester_add1'];?>">
					</div>
					<div class="form-group col-md-6">
						<label>Address Line 2</label><br>
						<input type="text" name="requester_add2" class="form-control" value="<?php if(isset($row['requester_add2']))echo $row['requester_add2'];?>">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-5">
						<label>City</label><br>
						<input type="text" name="requester_city" class="form-control" value="<?php if(isset($row['requester_city']))echo $row['requester_city'];?>">
					</div>
					<div class="form-group col-md-4">
						<label>State</label><br>
						<input type="text" name="requester_state" class="form-control" value="<?php if(isset($row['requester_state']))echo $row['requester_state'];?>">
					</div>	
					<div class="form-group col-md-3">
						<label>Zip</label><br>
						<input type="text" name="requester_zip" class="form-control" value="<?php if(isset($row['requester_zip']))echo $row['requester_zip'];?>">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>E - Mail</label><br>
						<input type="email" name="requester_email" class="form-control" value="<?php if(isset($row['requester_email']))echo $row['requester_email'];?>">
					</div>
					<div class="form-group col-md-6">
						<label>Mobile</label><br>
						<input type="text" name="requester_mobile" class="form-control" value="<?php if(isset($row['requester_mobile']))echo $row['requester_mobile'];?>">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Assigned Technician</label><br>
						<input type="text" name="assign_tech" class="form-control">
					</div>
					<div class="form-group col-md-6">
						<label>Date</label><br>
						<input type="date" name="assign_date" class="form-control">
					</div>
				</div>
				<button type="submit" class="btn btn-dark float-right" >Reset</button>
				<button type="submit" class="btn btn-success float-right mr-4" name="assign">Assign</button>
				<?php if(isset($msg)){echo $msg;}?>
			</form>
		</div>
		<!--  end  3nd column-->

	</div><!-- end row-->
</div><!--end container-->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.css"></script>
</body>
</html>