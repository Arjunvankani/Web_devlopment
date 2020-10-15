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
$sql = "SELECT * FROM customer_tb WHERE cid = {$_SESSION['myid']}";
$result = $conn->query($sql);
if($result->num_rows == 1)
{
	$row = $result->fetch_assoc();
	echo "<div>
	<table class='table'>
		<tbody>
	 		<tr>
				<th>Customer Id</th>
				<td>".$row['cid']."</td>
	  		</tr>
	  		<tr>
				<th>Name</th>
				<td>".$row['cname']."</td>
	  		</tr>
	  		<tr>
				<th>Customer Address</th>
				<td>".$row['cadd']."</td>
	  		</tr>
	  		<tr>
				<th>Product</th>
				<td>".$row['cpname']."</td>
	  		</tr>
	  		<tr>
				<th>Cost of each product</th>
				<td>".$row['cpeach']."</td>
	  		</tr>
	  		<tr>
				<th>Total Cost</th>
				<td>".$row['cptotal']."</td>
	  		</tr>
	  		<tr>
				<th>Date</th>
				<td>".$row['cpdate']."</td>
	  		</tr>
	  		<tr>
	  			<td><form class='d-print-none'><input class='btn btn-danger' type='submit' value='print' onClick='window.print()'></form></td>
	 		</tr>
	 	</tbody>
	 </table>		
</div>
";
}
else
{
	echo "Failed";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Bill</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet"  href="../css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/fontawesome.min.css">
	<link rel="stylesheet"  href="../css/custom.css">
</head>
<body>
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.css"></script>
</body>
</html>
