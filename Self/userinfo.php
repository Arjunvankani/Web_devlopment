 <?php 
 
$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection Sucessful";
}
else
{
	echo "No caonnection found";
}



mysqli_select_db($con, 'Self1');
  $user = $_POST['user'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];


  $query =  "INSERT INTO userdata (user, email, mobile) values ('$user','$email','$mobile')";

  mysqli_query($con,$query);

  header('location: index1.php'); 
	
?>