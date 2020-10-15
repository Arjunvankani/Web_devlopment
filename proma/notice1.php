 <?php 
 
$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection Sucessful";
}
else
  
{
	echo "No caonnection found";
}



mysqli_select_db($con, 'proma1');
  $subject = $_POST['subject'];
  $link = $_POST['link'];
  $description = $_POST['description'];



  $query =  "INSERT INTO notice(subject, link, description ) values ('$subject','$link','$description')";


  mysqli_query($con,$query);
  
  header('location: meny.php'); 
	
?>