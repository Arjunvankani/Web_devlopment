<!--<!DOCTYPE html>-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <!-- Importing bootstrap 3.0 and css -->

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet"/>

    <title>Hommies On The Loose</title>

    <script src="js/lumino.glyphs.js"></script>

</head>
<body>

	<!-- Top bar.....bread crumps -->

<div class="nav main-header" id="top-navigation">
<div id="top-navigation-logo">

  <!-- Logo and Text on the Left Side of the Top bar -->

<span>
<!--<img id="img-logo" src="img/logo.png" alt="Logo"/>-->
<a href="#" class="header_text"><p id="header-text" class="text-muted">send<span style="color:blue">CHat</span></p></a>
</span>
</div>



<!-- Welcome and Username at the right side of the Top Bar -->
<div id="top-navigation-username">

<span id="my_profile_picture"></span>

<!-- Working with the dp -->
<div id="dp_form_holder">
<form method="post" action="" enctype="multipart/form-data">
  <input type="file" name="file" id="file"/>
  <input type="submit" name="submit_file" id="submit_file"/>
</form>
</div>

<span style="color:white; margin-top:3px"><em>Welcome,&nbsp;</em></span>
<span style="margin-top:3px"><strong><?php echo ($_COOKIE["user_first_name"]); ?></strong></span>
</div>
</div>

<!-- End Of Top Bar -->

<div class="mycontainer">

	<!-- Side bar begins -->

    <div class="navigations">
        <ul class="lists">
            <li><a style="border-left:4px solid rgba(69, 162, 255, 0.93); border-radius:10px" href="Main_Dashboard.php"><img src="img/dashboard.png" class="navimg img-responsive"/><span class="nav-writting">Dashboard</span></a></li>
            <li><a href="General_Message/General_Message.php"><img src="img/chat-1.png" class="navimg img-responsive" /><span class="nav-writting">Public Chat</span></a></li>
            <li><a href="Private_Message/Private_Message.php"><img src="img/send-file.png" class="navimg img-responsive" /><span class="nav-writting">Private Chat</span></a></li>
            <li><a href="General_Share/General_Share.php"><img src="img/businessman.png" class="navimg img-responsive" /><span class="nav-writting">Public Share</span></a></li>
            <li><a href="Private_Share/Private_Share.php"><img src="img/remove-user.png" class="navimg img-responsive" /><span class="nav-writting">Private Share</span></a></li>
            <li><a href="General_announcement/general_announcement.php"><img src="img/log-file-format-1.png" class="navimg img-responsive" /><span class="nav-writting">General Announcements</span></a></li>
            <li onclick="Logout()"><a href="../index.php"><img src="img/logout.png" class="navimg img-responsive" /><span class="nav-writting">Logout</span></a></li>
        </ul>
    </div>

    <!-- Side Bar Ends Here -->

    <!-- Dashboard Content Starts Here With Jumbotron -->

  <div class="content">
  <div class="col-sm-8 col-md-10 col-lg-12 main">     
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
      </div>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-blue panel-widget ">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">120</div>
              <div class="text-muted">Total Comments</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-orange panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">52</div>
              <div class="text-muted">Today Comments</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">24</div>
              <div class="text-muted">New Users</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-red panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">25.2k</div>
              <div class="text-muted">Page Views</div>
            </div>
          </div>
        </div>
      </div>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Site Traffic Overview</div>
          <div class="panel-body">
            <div class="canvas-wrapper">
              <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>New Orders</h4>
            <div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">92%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>Comments</h4>
            <div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent">65%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>New Users</h4>
            <div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>Visitors</h4>
            <div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span>
            </div>
          </div>
        </div>
      </div>
    </div><!--/.row-->
                
    </div><!--/.row-->
  </div>  <!--/.main-->
     
  </div>

 <?php

    if(isset($_POST["submit_file"])){

    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "solid";

    $selected_username = $_COOKIE["user_first_name"];

    move_uploaded_file($_FILES["file"]["tmp_name"],"Profile_Pictures/".$_FILES["file"]["name"]);

    $connection_String = mysqli_connect($host,$user,$pass,$database);

    $myfiles = $_FILES["file"]["name"];

    $update_profile_query = "UPDATE users_table SET Profile_Picture = '$myfiles' WHERE Username='$selected_username'";

    $execute_update_profile_query = mysqli_query($connection_String,$update_profile_query);

  }

  ?>


 <script src="js/jquery-3.1.1.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
   <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>

 <script type="text/javascript">
  function Logout(){
    $.get("Logout/Logout.php");
}
 </script>

 <script type="text/javascript">

 $(document).ready(function(){

  $("#my_profile_picture").load("Get_Profile_Picture.php");

  $(" #my_profile_picture").click(function(){
  $('#file').trigger("click");
});

  $("#file").change(function(){
    $("#submit_file").trigger("click");
  });

  $("#submit_file").click(function(){
      $(this).submit();
  });

  $("#submit_file").submit(function(){
    $("#my_profile_picture").load("Get_Profile_Picture.php");
  });

});
 </script>

</body>
</html>
