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

 
  
 <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/pr.jpg" alt="Los Angeles" width="1080" height="720">
      <div class="carousel-caption">
       </div>   
    </div>
    <div class="carousel-item">
      <img src="img/t7.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
       
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/t1.jpg" alt="New York" width="1080" height="720">
      <div class="carousel-caption">
       
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
    <h2 class="text-center">Project information</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Name of project </label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      
      <div class="form-group">
        <label>Password </label>
        <input type="Password" name="password" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
          <label>Comment</label>
          <textarea class="form-control" name="comment"> 
          </textarea>
        </div>
      <div class="form-group">
        <label>Number of member </label>
        <input type="text" name="num" autocomplete="off" class="form-control">
      </div>  
      <div class="spinner-border text-secondary"></div>
<div class="form-check-inline">
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Small
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Medium
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio3">
        <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option3">Big
      </label>
    </div>
     
      <button type="submit" class="btn btn-success">Go</button>
    </section>



   

  <footer>
    <h4 class="p-3 bg-dark text-white text-center">
       Project managment 
    </h4>
  </footer>


  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>  

 </body>
 </html>