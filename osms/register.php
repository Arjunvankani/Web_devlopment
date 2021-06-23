<?php 
include('connection.php');
if(isset($_REQUEST['rsignup']))
{
	if(($_REQUEST['rname']=="") || ($_REQUEST['remail'] == "") || ($_REQUEST['rpassword'] == ""))
	{
		$regmsg = '<div class="alert alert-warning mt-2"role="alert">All fields are required</div>';
	}
	else
	{
		$sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email='".$_REQUEST['remail']."'";
		$result = $conn->query($sql);
		if($result->num_rows==1)
		{
			$regmsg = '<div class="alert alert-warning mt-2"role="alert">E-mail id is already Registered</div>';
		}
		else
		{
		$rname = $_REQUEST['rname'];
		$remail = $_REQUEST['remail'];
		$rpassword  = $_REQUEST['rpassword'];
		$sql = "INSERT INTO requesterlogin_tb(r_name,r_email,r_password) VALUES('$rname','$remail','$rpassword')";
		if($conn->query($sql)==TRUE)
		{
		$regmsg = '<div class="alert alert-success mt-2"role="alert">Account sucessfully created</div>';
		}
		else
		{
			$regmsg = '<div class="alert alert-danger mt-2"role="alert">Unable to create account</div>';
		}
	}
}
}
?>
<div class="container pt-5">
	<h2 style="text-align: center;" id="register">Create an account</h2>
	<div class="row mt-4 mb-4">
		<div class="col-md-6 offset-md-3">
			<form action="" method="POST" style="box-shadow: 10px 0px 10px 0px lightgrey;">
				<div class="form-group">
					<img src="https://img.icons8.com/material-sharp/24/000000/user.png"/>
					<label class="pl-2" style="font-weight: bold;" for="name">Name</label><br>
					<input type="text" class="form-control" name="rname" placeholder="Enter your name">
				</div>
				<div class="form-group">
					<img src="https://img.icons8.com/ios/24/000000/email.png"/>
					<label class="pl-2" style="font-weight: bold;" for="email">Email</label><br>
					<input class="form-control" type="email" name="remail" placeholder="E-mail" >
				</div>
				<div class="form-group">
					<img src="https://img.icons8.com/android/24/000000/key.png"/>
					<label for="password" class="pl-2" style="font-weight: bold;">Password</label><br>
					<input type="password" name="rpassword" class="form-control" placeholder="Password" >
				</div>
				<button type="submit" class="btn-danger mt-4 btn-block shadow-sm font-weight-bold " name="rsignup">Sign up</button>
				<?php  if(isset($regmsg)) {echo $regmsg;}
				?>
			</form>
		</div>	
	</div>
</div>