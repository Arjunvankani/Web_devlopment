<!DOCTYPE html>
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
 
  




	<section class="my-5">
	<div class="py-5" >
		<h2 class="text-center">Registration </h2>
	</div>
	<div class="w-50 m-auto">
		<form action="reg.php" method="post">
			<div class="form-group">
				<label>User Name </label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Email Id </label>
				<input type="text" name="email" autocomplete="off" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Password </label>
				<input type="Password" name="Password" autocomplete="off" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Mobile Number </label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>

			Employee List:
    <select>
      <option value="category">select</option>
      <option value="category">team leader</option>
      <option value="category">manager</option>
      <option value="category">Employee</option>
    </select>
   <hr>
			
			<button type="submit" class="btn btn-success">Submit</button>
		</section>
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