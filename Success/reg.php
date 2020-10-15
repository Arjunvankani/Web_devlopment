 <?php 
 
$con = mysqli_connect('localhost','root');


if($con){
  echo "Connection Sucessful";
}
else
{
  echo "No caonnection found";
}


mysqli_select_db($con,'projectsuccess');

  $user = $_POST['user'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $mobile = $_POST['mobile'];
  $category = $_POST['category'];
  


  $query="INSERT INTO reg (user, email, password, mobile, category)VALUES('$user','$email','$password','$mobile','$category')";

  mysqli_query($con,$query);

  header('location: project.php'); 
  
?>