<?php
include('../connection.php');
session_start();
if($_SESSION['is_login'])
{
	$remail = $_SESSION['remail'];
}
else
{
	echo "<script> location.href='requesterlogin.php'</script>";
}
$sql = "SELECT * FROM submitrequest_tb WHERE request_id = {$_SESSION['myid']}";
$result = $conn->query($sql);
if($result->num_rows == 1)
{
	$row = $result->fetch_assoc();
	echo "<div>
	<table class='table'>
		<tbody>
	 		<tr>
				<th>Request ID</th>
				<td>".$row['request_id']."</td>
	  		</tr>
	  		<tr>
	  			<th>Name</th>
	  			<td>".$row['requester_name']."</td>
	  		</tr>
	  		<tr>
	  			<th>Contact number</th>
	  			<td>".$row['requester_mobile']."</td>
	  		</tr>
	  		<tr>
	  			<th>E-mail</th>
	  			<td>".$row['requester_email']."</td>
	  		</tr>
	  		<tr>
	  			<th>Requester info</th>
	  			<td>".$row['request_info']."</td>
	  		</tr>
	  		<tr>
	  			<th>Descripiton</th>
	  			<td>".$row['request_description']."</td>
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
	<title>Success</title>
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
