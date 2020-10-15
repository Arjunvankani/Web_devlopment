 <?php 
 
$con = mysqli_connect('localhost','root');

if($con){
  echo "Connection Sucessful";
}
else
{
  echo "No caonnection found";
}



mysqli_select_db($con, 'projectsuccess');
  $user = $_POST['user'];
  
  $password = $_POST['password'];
  $comment = $_POST['comment'];
  $num = $_POST['num'];


  $query =  "INSERT INTO userdata (user, password, comment, num) values ('$user','$password','$comment','$num')";

  mysqli_query($con,$query);

  header('location: meny.php'); 
  
 