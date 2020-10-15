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
if(isset($_REQUEST['submitrequest']))
{
	if(($_REQUEST['rinfo'] == "") || ($_REQUEST['description'] == "") || ($_REQUEST['iname'] == "") || ($_REQUEST['iadd1'] == "") || ($_REQUEST['iadd2'] == "") || ($_REQUEST['icity'] == "") || ($_REQUEST['istate'] == "") || ($_REQUEST['izip'] == "") || ($_REQUEST['iemail'] == "") || ($_REQUEST['inumber'] == "") || ($_REQUEST['idate'] == ""))
	{
	$msg='<div class="alert alert-warning mt-2" role="alert">all fields are required</div>';
	}
else
{
	$rinfo = $_REQUEST['rinfo'];
	$description = $_REQUEST['description'];
	$iname = $_REQUEST['iname'];
	$iadd1 = $_REQUEST['iadd1'];
	$iadd2 = $_REQUEST['iadd2'];
	$icity = $_REQUEST['icity'];
	$istate = $_REQUEST['istate'];
	$izip = $_REQUEST['izip'];
	$iemail = $_REQUEST['iemail'];
	$inumber = $_REQUEST['inumber'];
	$idate = $_REQUEST['idate'];

	$sql = "INSERT INTO submitrequest_tb (request_info,request_description,	requester_name,requester_add1,requester_add2,requester_city,requester_state,requester_zip,requester_email,requester_mobile,	request_date) VALUES('$rinfo','$description','$iname','$iadd1','$iadd2','$icity','$istate','$izip','$iemail','$inumber','$idate')";
	if($conn->query($sql) == TRUE)
	{
		$genid = mysqli_insert_id($conn);
		$msg = '<div class="alert alert-success mt-2" role="alert">We have recieved your request</div>  ';
		$_SESSION['myid'] = $genid;
		echo "<script>location.href='successrequest.php';</script>";
	}
	else
	{
		  $msg = '<div class="alert alert-success mt-2" role="alert">Unable to accept your request</div>  ';
	}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Submit Request</title>
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
		<nav class="col-sm-2 bg-light sidebar py-2 "><!-- start side bar 1st column-->
			<div class="sidebar-sticky">
				<ul class="nav flex-column" style="font-weight: bold;">
					<li class="nav-item" ><a class="nav-link "  href="requesterprofile.php"><img src="https://img.icons8.com/material-sharp/24/000000/user.png"/>Profile</a></li>
					<li class="nav-item"><a class="nav-link bg-danger" style="color: white;" href="submitrequest.php"><img src="https://img.icons8.com/windows/24/000000/request-service.png"/>Submit Request</a></li>
					<li class="nav-item"><a class="nav-link" href="servicestatus.php"><img src="https://img.icons8.com/material-sharp/24/000000/timer.png"/>Service Status</a></li>
					<li class="nav-item"><a class="nav-link" href="changepassword.php"><img src="https://img.icons8.com/android/24/000000/key.png"/>Change Password</a></li>
					<li class="nav-item"><a class="nav-link" href="../logout.php"><img src="https://img.icons8.com/metro/24/000000/export.png"/>Log Out</a></li>
				</ul>
			</div>
		</nav><!-- end side bar 1st column-->
		<!--styar of service status-->
		<div class="col-sm-9 col-md-10 " style="font-weight: bold;">
			<form class="mx-5" action="" method="POST" id="">
				<div class="fomr-group mt-2">
					<label>Request info</label><br>
					<input type="text" id="inputrequestinfo" name="rinfo" class="form-control" placeholder="Request info">
				</div>
				<div class="fomr-group mt-2">
					<label>Description</label><br>
					<input type="text" name="description" class="form-control" placeholder="Write Description">
				</div>
				<div class="fomr-group mt-2">
					<label>Name</label><br>
					<input type="text" name="iname" class="form-control">
				</div>
				<div class="form-row">
					<div class="fomr-group col-md-6 mt-2">
						<label>Address Line1</label><br>
						<input type="text" name="iadd1" class="form-control">
					</div>
					<div class="fomr-group col-md-6 mt-2">
						<label>Address Line2</label><br>
						<input type="text" name="iadd2" class="form-control">
					</div>
				</div>
				<div class="form-row">
					<div class="fomr-group col-md-6 mt-2">
						<label>City</label><br>
						<input type="text" name="icity" class="form-control">
					</div>
					<div class="fomr-group col-md-4 mt-2">
						<label>State</label><br>
						<input type="text" name="istate"class="form-control">
					</div>
					<div class="fomr-group col-md-2 mt-2">
						<label>Zip</label><br>
						<input type="text" name="izip" class="form-control"  onkeypress="isInputNumber(event)">
					</div>
				</div>
				<div class="form-row">
					<div class="fomr-group col-md-6 mt-2">
						<label>E-mail</label><br>
						<input type="email" name="iemail" class="form-control">
					</div>
					<div class="fomr-group col-md-3 mt-2">
						<label>Mobile</label><br>
						<input type="text" name="inumber" class="form-control" onkeypress="isInputNumber(event)">
					</div>
					<div class="fomr-group col-md-3 mt-2">
						<label>Date</label><br>
						<input type="date" name="idate" class="form-control">
					</div>
				</div>
				<button class="btn btn-danger mt-3" type="submit" style="font-weight: bold;" name="submitrequest">Submit</button>
				<button class="btn btn-dark mt-3" type="submit" style="margin-left: 10px;font-weight: bold;">Reset</button>
		</form>
		<?php
		if(isset($msg)){echo $msg;}
		?>
		</div><!--  end profile area 2nd column-->
	</div><!-- end row-->
</div><!--end container-->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.css"></script>
</body>
</html>
