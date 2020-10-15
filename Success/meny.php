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
 
<?php include 'menu.php'; ?>

  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/t8.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Task Divisor</h3>
        <p>Design is not just what it looks it is all about how it works</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/t11.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Reminder /  Time scheduling</h3>
        <p>If you do it right,it will last forever</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/t12.png" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>File Uploading</h3>
        <p>Recognization is a deal with a final condition of designing</p>
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

	
	<div class="jumbotron">
 	<a href="notice.php" class="btn btn-secondary" role="button">NOTICE</a>
 	<H1>Any one can notice that any event & query ,Here......</H1>
 </div>
 <div class="jumbotron">
 	<a href="reminder.php" class="btn btn-secondary" role="button">REMINDER</a>
 	<h1>This is for how much your work can be done within time schedule....</h1>
 </div>
 <div class="jumbotron">
	<a href="taskdivisor.php" class="btn btn-secondary" role="button">TASK DIVISOR</a>
	<h1>Every one have task for doing work and progress report....</h1>
</div>
<div class="jumbotron">
	<a href="upload-design.php" class="btn btn-secondary" role="button">UPLOAD FILE</a>
	<h1>Here,All can access and upload data or fetch either use data...</h1>
</div>




	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>  

 </body>
 </html>