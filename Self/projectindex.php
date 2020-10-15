<!DOCTYPE html>
 <html>
 <head>
 	<title></title> 

	  <meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1"> 
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	 </head>
 <body>
 
 <?php include 'menu.php'; ?>
 


 <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Small project
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Meduim project
  </label>
</div>
<div class="form-check-inline disabled">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio" disabled>Big project
  </label>
</div>

<!-- Multiple inputs -->
<form>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">Name of project </span>
    </div>
    <input type="text" class="form-control" placeholder="First Name">
    <input type="text" class="form-control" placeholder="Last Name">
  </div>
</form>

<!-- Multiple addons / help text -->
<form>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">One</span>
     

    <input type="text" class="form-control" placeholder="First Name">
    <input type="text" class="form-control" placeholder="Last Name">
    <input type="text" class="form-control" placeholder="Enter Id">
      <span class="input-group-text">Two</span>
      
    <input type="text" class="form-control" placeholder="First Name">
    <input type="text" class="form-control" placeholder="Last Name">
      <input type="text" class="form-control" placeholder="Enter Id">
  
      <span class="input-group-text">Three</span>
      
    <input type="text" class="form-control" placeholder="First Name">
    <input type="text" class="form-control" placeholder="Last Name">
      <input type="text" class="form-control" placeholder="Enter Id">
  
    </div>
    <input type="text" class="form-control">
  </div>
</form>


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