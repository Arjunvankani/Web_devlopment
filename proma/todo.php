
<html lang="en">
<head>
  <title>PROMA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/todo.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
  <a class="navbar-brand" href="#">PROMA</a>

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="employee.php">Home</a>
    </li>
    
     <li class="nav-item">
      <a class="nav-link" href="forward.php">Task Forward</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="notification.php">Notification</a>
    </li>
  </ul>
<ul class="navbar-nav" style="object-position: right;">
  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        <img src="">
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="profile.php">Profile</a>
        <a class="dropdown-item" href="index.php">Logout</a>
      </div>
    </li>
   </ul > 
</nav>

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
   
  
  



    </table>
</div>  
</body>
</html>
