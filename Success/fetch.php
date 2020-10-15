<?php

$conn=new mysqli("localhost","root","","projectsuccess");

 $img_id = $_POST['img_id'];

$stmt=$conn->prepare("SELECT img_path FROM `image_table` WHERE img_id='$img_id';");				
				$stmt->execute();
				$stmt->store_result();
				$stmt->bind_result($img_path);
				while ($stmt->fetch()) {}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<img src="<?php echo $img_path;?>"></img>

	
</body>
</html>	