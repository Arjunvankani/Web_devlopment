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
  
  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/p1.jfif" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/p2.jfif" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/p3.jfif" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5" >
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluids">
	  <div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="img/p4.jfif" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h3 class="display-4">Thanking for seeing us site!!!!!</h3>
			<a href="about.php" class="btn btn-outline-success"> Check More</a>
		</div>	
	  </div>	
	</div>
</section>

<section class="my-5">
	<div class="py-5" >
		<h2 class="text-center">Services</h2>
	</div>
			
		<div class="container-fluids">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card" >
  						<img class="card-img-top" src="img/p5.jpg" alt="Card image">
  						<div class="card-body">
    					<h4 class="card-title"> India </h4>
    					<p class="card-text">Some example text.</p>
   						<a href="#" class="btn btn-primary">See Profile</a>
  					 	</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<div class="card" >
  						<img class="card-img-top" src="img/p5.jpg" alt="Card image">
  						<div class="card-body">
    					<h4 class="card-title"> India </h4>
    					<p class="card-text">Some example text.</p>
   						<a href="#" class="btn btn-primary">See Profile</a>
  					 	</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<div class="card" >
  						<img class="card-img-top" src="img/p5.jpg" alt="Card image">
  						<div class="card-body">
    					<h4 class="card-title"> India </h4>
    					<p class="card-text">Some example text.</p>
   						<a href="#" class="btn btn-primary">See Profile</a>
  					 	</div>
					</div>
				</div>

			</div>
		</div> 
</section>

<section class="my-5">
	<div class="py-5" >
		<h2 class="text-center">Gallery</h2>
		<div class="container-fluids">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<img src="img/p6.jpg" class="img-fluid pb-4">	
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="img/p6.jpg" class="img-fluid pb-4">	
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="img/p6.jpg" class="img-fluid pb-4">	
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="img/p6.jpg" class="img-fluid pb-4">	
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="img/p6.jpg" class="img-fluid pb-4">	
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="img/p6.jpg" class="img-fluid pb-4">	
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="img/p6.jpg" class="img-fluid pb-4">	
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="img/p6.jpg" class="img-fluid pb-4">	
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="img/p6.jpg" class="img-fluid pb-4">	
				</div>
			</div>
		</div>
	</div>
</section>

	<section class="my-5">
	<div class="py-5" >
		<h2 class="text-center">Contect Us</h2>
	</div>
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>User Name </label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Email Id </label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile Number </label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			
					<button type="submit" class="btn btn-success">Submit</button>

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