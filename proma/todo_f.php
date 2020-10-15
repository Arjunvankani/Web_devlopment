 <?php

$con = mysql_connect("localhost","root", "", "proma1");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

mysql_select_db("smart", $con);

$result = mysql_query("SELECT * FROM task");

while($row = mysql_fetch_array($result))

  {

  echo $row['Project ID'] . $row['Task ID']. $row['Task Name']. $row['Description Of Task'] . $row['Due Date']. $row['Priority']. $row['Status'].$row['Change status'];

  echo "<br />";

  }


?>