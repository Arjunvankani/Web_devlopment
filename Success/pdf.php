<?php
// Database Connection 
$conn = new mysqli('localhost', 'root', '', 'projectsuccess');
//Check for connection error
$select = "SELECT * FROM `image_table`";
$result = $conn->query($select);
while($row = $result->fetch_object()){
  $pdf = $row->filename;
  $path = $row->directory;
  $date = $row->created_date;
}

echo '<h1>Here is the information PDF</h1>';
echo '<strong>Created Date : </strong>'.$date;
echo '<strong>File Name : </strong>'.$pdf;
?>
<br/><br/>
<iframe src="<?php echo $path.$pdf; ?>" width="90%" height="500px">
</iframe>