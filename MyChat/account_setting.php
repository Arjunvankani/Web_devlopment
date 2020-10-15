<!DOCTYPE html>
<?php 
session_start();
include("include/connection.php");
include("include/header.php");

if(!isset($_SESSION['user_email'])){
	header("location: signin.php");
	} 
else { ?>
<html>
<head>
	<title>Account Setting</title>
	<link rel="stylesheet" type="text/css" href="../css/find.css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>
	<div class="row">
		<div class="col-sm-2">
			
		</div>
		<?php 
			$user = $_SESSION['user_email'];
			$get_user ="SELECT * FROM users WHERE user_email='$user'";
			$run_user = mysqli_query($con, $get_user);
			$row = mysqli_fetch_array($run_user);

			$user_name = $row['user_name'];
			$user_pass = $row['user_pass'];
			$user_email = $row['user_email'];
			$user_profile = $row['user_profile'];
			$user_country = $row['user_country'];
			$user_gender = $row['user_gender'];
		?>
		
		<div class="col-sm-8">
			<form action="" method="post" enctype="multipart/form-data">
				<table class="table table-borderd table-hover">
					<tr align="center">
						<td colspan="6" class="active"><h2>Change Account Settings</h2></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Change Your Username</td>
						<td>
							<input type="text" name="u_name" class="form-control" required value="<?php echo $user_name;?>"/>
						</td>
					</tr>
					<tr><td></td><td><a class="btn btn-default" style="text-decoration: none;font:15px;" href="upload.php"><i class="fa fa-user" aria-hidden='true'></i>Change Profile</a></td></tr>

					<tr>
						<td style="font-weight: bold;">Change Your Email</td>
						<td>
							<input type="email" name="u_email" class="form-control" required value="<?php echo $user_email;?>"/>
						</td>
					</tr>

					<tr>
						<td style="font-weight: bold">Coutry</td>
						<td>
							<select class="form-control" name="u_coutry">
								<option><?php echo $user_country; ?></option>
								<option>USA</option>
								<option>UK</option>
								<option>INDIA</option>
								<option>RUSIIA</option>
								<option>JAPAN</option>
							</select>
						</td>
					</tr>


					<tr>
						<td style="font-weight: bold">Gender</td>
						<td>
							<select class="form-control" name="u_gender">
								<option><?php echo $user_gender; ?></option>
								<option>MALE</option>
								<option>FEMALE</option>
								<option>OTHERS</option>
								<option>RATHER NOT TO SAY</option>
							</select>
						</td>
					</tr>

					<tr>
						<td style="font-weight: bold;">Forgotten Password</td>
						<td>
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#MyModel">Forgotten Password</button>

							<div id="MyModel" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										<div class="modal-body">
											<form action="recovery.php?id=<?php  echo $user_id; ?>" method="post" id="f">
												<strong>What is your best firend name ??</strong>
												<textarea class="form-control" cols="83" rows="4" name="content" placeholder="Someone" ></textarea><br>
												<input class="btn btn-default" type="submit" name="sub" value="Submit" style="width: 100px;"><br><br>
												<pre>ANswer the above question we will ask you this question if you forget your <br> Password.</pre>
												<br><br>
											</form>
											<?php 
												if (isset($_POST['sub'])) {
													$bfn = htmlentities($_POST['content']);

													if ($bfn == '') {
														echo "<script> alert('Please enter Something ..')</script>";
														echo "<script>window.open('account_setting.php', '_self')</script>";
														exit();
													}
													else{
														$update = "UPDATE users SET forgotten_answer='$bfn' WHERE user_email='$user'";

														$run = mysqli_query($con, $update);
														if ($run) {
															echo "<script> alert('Working ..')</script>";
														echo "<script>window.open('account_setting.php', '_self')</script>";
														exit();
														}
														else{
															echo "<script> alert('Error While updating ..')</script>";
														echo "<script>window.open('account_setting.php', '_self')</script>";
														exit();
														}
													}
												}
											?>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						
					</tr>

					<tr><td></td><td><a  class="btn btn-default" style="text-decoration: none;font-weight: 15px" href="change_password.php"><i class="fa fa-key fa-fw" aria-hidden="true"></i>Change Password</a></td></tr>

					<tr align="center">
						<td colspan="6">
							<input type="submit" value="Update" name="update" class="btn btn-info">
						</td>
					</tr>

				</table>
				
			</form>
			<?php 
				if(isset($_POST['update'])){
					$user_name = htmlentities($_POST['u_name']);
					$email = htmlentities($_POST['u_email']);
					$u_coutry = htmlentities($_POST['u_coutry']);
					$u_gender = htmlentities($_POST['u_gender']);

					$update = "UPDATE users SET user_name='$user_name',user_email='$email', user_country='$u_coutry', user_gender='$u_gender' WHERE user_email='$user'";

					$run = mysqli_query($con, $update);

					if($run){

							echo "<script>window.open('account_setting.php', '_self')</script>";
							exit();
					}	
				}
			?>
		</div>
		<div class="col-sm-2">
			 
		</div>
	</div>
</body>
</html>
<?php } ?>