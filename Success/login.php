<?php 


  if(isset($_POST['submit'])) {
    $conn = new mysqli("localhost","root", "", "projectsuccess") or die($conn->connect_error);
    $email = $_POST['email'];
    
   

    if ($result->num_rows==1) {
      $login_data = $result->fetch_assoc();
      if ($login_data['password']==$_POST['psw']) {

        session_start();
        
        
      }
      else{
      
          echo"<style>
            #InCreP {
              display:block;
            }
          </style>";
      }
    }
    else{
    
         echo"<style>
         #InCreP {
           display:block;
         }
       </style>";
    }
    $conn->close();
  }
   
              
               

?>  

 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: green;
  text-align: center;
}

* {
  box-sizing: border-box;
}

form {
    display: inline-block;
}

.container {
  padding: 16px;
  align-content: center;
  background-color: white;
  border-radius: 16px;
  border: 5px solid darkgray;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #d6d6d6;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}
.show_warning{
    position: fixed;
    width: 100%;
    top: 0;
    text-align: center;
    z-index: 100000;
}

#display{
    display: block;
    background-color: transparent;  
}

#text_for_warning{
    display: inline-block;
    padding:10px 100px 10px 100px;
    color: black;
    max-width: 50%;
}

</style>
</head>
<body>
 


</body>
</html>


<html>
 <head>
  <title>Project Managment</title> 

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   </head>
 <body>
 
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <a class="navbar-brand" href="#">  Project Managment </a>
 </nav>
 
  
  

  <form method="post" >
   
 
  <div class="container" class="text-center" >
    <h1>Login</h1>
    <hr style="color: darkgray">
    <label for="empid"><b>Employee Id</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    Employee List:
    <select>
      <option value="">select</option>
      <option value="">team leader</option>
      <option value="">manager</option>
      <option value="">Employee</option>
    </select>
   <hr>
    <button type="button" class="btn btn-secondary"  onclick="location.href='project.php'">Log in</button>
  </div>
  
</form>

<p id="InCreP" style="display:none;">Incorrect Credentials</p>
 <footer>
    <h4 class="p-3 bg-dark text-white text-center">
       Project managment 
    </h4>

  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>  

 </body>
 </html>