<?php

$position = array("--Select Position--","Director","Managing Director","Cordinator","Secretary",
"Accountant","Programmer");

$deparment = array("--Select Department--","Accountancy","Marketting","Purchasing","Computing");

  $host = "localhost";
  $user = "root";
  $pass = "";
  $database = "solid";

  $connection_String = mysqli_connect($host,$user,$pass,$database);


  if(isset($_POST["submit"])){

    $first_name = $_POST["txtfname"];
    $last_name = $_POST["txtlname"];
    $user_password = $_POST["txtpassword"];
    $user_position = $_POST["selected_position_option"];
    $user_department = $_POST["selected_department_option"];
    $security_key = $_POST["txtsecurity_key"];

    if($first_name!="" && $last_name!="" && $user_password!="" && $user_position!="" && $user_department!="" && $security_key!=""){

      $security_key_check_command = "SELECT * FROM users_security_keys WHERE password = '$security_key' AND users_fname='$first_name' AND users_lname = '$last_name'";
      $execute_check_command = mysqli_query($connection_String,$security_key_check_command);
      $check_user_validity_status = mysqli_num_rows($execute_check_command);
      if($check_user_validity_status==1){
        $check_validity_status = mysqli_fetch_assoc($execute_check_command);
      if($check_validity_status["status"] == "not_used"){
        $register_user_command = "INSERT INTO users_table (`Users_ID`, `user_fname`, `user_lname`, `department`, `position`, `Password`, `Profile_Picture`) VALUES (NULL, '$first_name', '$last_name', '$user_department', '$user_position', '$user_password', '')";
        if($execute_register_command = mysqli_query($connection_String,$register_user_command)){
        $update_user_status_command = "UPDATE users_security_keys SET status = 'used' WHERE users_fname='$first_name' AND users_lname = '$last_name'";
        $execute_update_command = mysqli_query($connection_String,$update_user_status_command);
        echo "<script>alert('You have registered Successfully')</script>";
      }else{
        "<script>alert('Sorry, You cannot be registered, Contact The Administrator')</script>";
      }
      }else{
        echo "<script>alert('Sorry, You have already registered')</script>";
      }
    }else{
        echo "<script>alert('Please Contact Adminstrator For A Valid Security Key')</script>";
    }
  }else{
    echo "<script>alert('Please Fill All Spaces Provided')</script>";
  }
}
 ?>
<!--<!DOCTYPE html>-->
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link rel="stylesheet" href="Login_css/style.css">
</head>

<style type="text/css">
.selected_position,.selected_department{
  width: 100%;
  height: 50px;
}
.flex-row-adjusted{
  height: 30px;
}
a{
  color:#2dc6bf;
}
.lf--submit-adjusted{
  padding-bottom: .5em;
}
</style>

<body>
  <form class='login-form' method="post">
  <div class="flex-row">
    <input id="fname" class='lf--input' placeholder='Enter First Name' type='text' name="txtfname">
  </div>
  <div class="flex-row">
    <input id="lname" class='lf--input' placeholder='Enter Last Name' type='text' name="txtlname">
  </div>

  <div class="flex-row">
  <select class="selected_position" name="selected_position_option">
    <?php
  foreach($position as $val) { echo "<option>".$val."</option>";};
     ?>
  </select>
  </div>

  <div class="flex-row">
  <select class="selected_department" name="selected_department_option">
    <?php
  foreach($deparment as $val) { echo "<option>".$val."</option>";};
    ?>
  </select>
  </div>

  <div class="flex-row">
    <input id="password" class='lf--input' placeholder='Password' type='password' name="txtpassword">
  </div>

  <div class="flex-row">
    <input id="password" class='lf--input' placeholder='Enter Security Key' type='password' name="txtsecurity_key">
  </div>
  <input class='lf--submit lf--submit-adjusted' type='submit' value='Sign Up' name="submit" id="btnSubmit">

  <p style="font-size:.6em;color:#2dc6bf;text-align:center;cursor:hand"><u><a href="index.php">Sign In</a></u></p>

</form>
</body>

</html>
