<?php


$conn=new mysqli("localhost","root","","projectsuccess");

    $emp_id = $_SESSION["session_id"];

?>
<html lang="en">
<head>
  <title>Task divisor</title>
 <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

<?php include 'menu.php'; ?>
<div class="container1">
	<table class="table1">
		<tr>
			<th>Project ID</th>
			<th>Task ID</th>
			<th>Task Name</th>
			<th>Description Of Task</th>
			<th>Due Date</th>
			<th>Priority</th>
			<th>Status</th>
			<th>Change status</th>
		</tr>
		<form method="post">
		<?php

		$sql = "SELECT a.p_id,a.t_id,a.t_name,a.dsc,a.due_date,a.t_priority,a.status FROM task a JOIN work b WHERE a.t_id = b.t_id and b.emp_id = '$emp_id' and a.status != 1";

		
		while($row = $result->fetch_assoc()) {				
        			echo "<tr>
					<td>". $row['p_id']."</td>
					<td>".$row["t_id"]."</td>
					<td>".$row["t_name"]."</td>
					<td>".$row["dsc"]." </td>
					<td>".$row["due_date"]." </td>
          <td>".$row["t_priority"]. " </td>
          <td>".$row["status"]. " </td>
          <td>
          	<a href='todo_f.php?tid=".$row['t_id']."&pid=".$row['p_id']."'>Compleate</a>
          </td>
          </tr>";
	}
?>		
	
	


</form>
		</table>
</div>  
</body>
</html>
