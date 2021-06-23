<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "solid";

if(isset($_POST["submit_file"])){
$selected_username = $_COOKIE["user_first_name"];
$users_last_name = $_COOKIE["users_last_name"];
move_uploaded_file($_FILES["file"]["tmp_name"],"../Profile_Pictures/".$_FILES["file"]["name"]);
$connection_String = mysqli_connect($host,$user,$pass,$database);
$myfiles = $_FILES["file"]["name"];
$update_profile_query = "UPDATE users_table SET Profile_Picture = '$myfiles' WHERE user_fname = '$selected_username'AND user_lname ='$users_last_name' ";
$execute_update_profile_query = mysqli_query($connection_String,$update_profile_query);

}

 ?>
<!--<!DOCTYPE html>-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <!-- Importing bootstrap 3.0 and css -->

    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/style3.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/uploadify.css">
    <link href="../css/private_share.css" rel="stylesheet"/>

    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.knob.js"></script>
    <script src="../js/jquery.ui.widget.js"></script>
    <script src="../js/jquery.iframe-transport.js"></script>
    <script src="../js/jquery.fileupload.js"></script>
    
    <!-- Our main JS file -->
    <script src="../js/script.js"></script>

    <title>Hommies On The Loose</title>

</head>

<body>
  <!-- Top bar.....bread crumps -->
<div class="nav main-header" id="top-navigation">
<div id="top-navigation-logo">
  <!-- Logo and Text on the Left Side of the Top bar -->
<span>
<!-- <img id="img-logo" src="../img/logo.png" alt="Logo"/> -->
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
            <li><a href="../Main_Dashboard.php"><img src="../img/dashboard.png" class="navimg img-responsive"/><span class="nav-writting">Dashboard</span></a></li>
            <li><a href="../General_Message/General_Message.php"><img src="../img/chat-1.png" class="navimg img-responsive" /><span class="nav-writting">Public Chat</span></a></li>
            <li><a href="../Private_Message/Private_Message.php"><img src="../img/send-file.png" class="navimg img-responsive" /><span class="nav-writting">Private Chat</span></a></li>
            <li><a href="../General_Share/General_Share.php"><img src="../img/businessman.png" class="navimg img-responsive" /><span class="nav-writting">Public Share</span></a></li>
            <li><a style="border-left:4px solid rgba(69, 162, 255, 0.93); border-radius:10px" href="Private_Share.php"><img src="../img/remove-user.png" class="navimg img-responsive" /><span class="nav-writting">Private Share</span></a></li>
            <li><a href="../General_announcement/general_announcement.php"><img src="../img/log-file-format-1.png" class="navimg img-responsive" /><span class="nav-writting">General Announcements</span></a></li>
            <li onclick="Logout()"><a href="../../index.php"><img src="../img/logout.png" class="navimg img-responsive" /><span class="nav-writting">Logout</span></a></li>
        </ul>
    </div>

    <!-- Side Bar Ends Here -->

    <div class="main_content">
      <div class="main_content_holder">

      <div class="first_box">
        <div class = "panel panel-adjusted">
       <div class = "panel-heading phead">
        <h2 class = "panel-title ptitle">Select &nbsp; User</h2>
       </div>
      <div class = "panel-body pbody">

        <?php

        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "solid";

        $connection_String = mysqli_connect($host,$user,$pass,$database);

          $counter = 1;
          $counter < 100;
          $users_list = "SELECT * FROM users_table";
          $fetch_users = mysqli_query($connection_String,$users_list);
          while($fetch_each_user=mysqli_fetch_array($fetch_users)){ 

            $first_name = $fetch_each_user["user_fname"]; 
            $last_name = $fetch_each_user["user_lname"];
            $fullname = $first_name." ".$last_name; 
            $position= $fetch_each_user["position"]; 
            $picture = $fetch_each_user["Profile_Picture"];

            echo "<div class='each_user_holder'>";

            echo "<span><strong style='color:#45a2ff'>$fullname</strong></span><br>";
            echo "<span><i style='color:#cec7d4'>$position</i></span>";
            echo "<span style='float:right;margin-top:-15px;margin-right:5px'><img style='cursor:pointer' id='$counter' name='$fullname' class='item_number_clicker' src='../img/plus_sign.png' alt='Image' width='25px' height='25px'/></span>";

            echo "</div>";

           $counter++;
          }

        ?>

      </div>
    </div>
      </div>

      <div class="second_box">

        <div class = "panel panel-adjusted">
       <div class = "panel-heading phead">
        <h2 class = "panel-title ptitle">Selected &nbsp; Users</h2>
       </div>
      <div class = "panel-body pbody pbody_selected">

        <ol>

        </ol>

       

      </div>
    </div>
</div>

      <div class="third_box">

      <div class = "panel panel-adjusted">
       <div class = "panel-heading phead">
        <h2 class = "panel-title ptitle">Select Files To Send</h2>
       </div>
      <div class = "panel-body pbody">

      <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
      <div id="drop">
        Drop Here

      <a>Browse</a>
      <input type="file" name="upl" multiple />
      </div>

      <ul>
        <!-- The file uploads will be shown here -->
      </ul>

    </form>
     
      </div>
      </div>


      </div>


      </div>
    </div>
  

    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script>

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

  
      $(".first_box .item_number_clicker").click(function(){
        var user_fullname = $(this).attr("name");
        var user_id = $(this).attr("id");
        $("ol").append("<div class='each_user_holder my_remove_class "+user_id+"'><li class="+user_id+" style='color:#45a2ff;padding:10px'>"+user_fullname+"<img class='remove_user' src='../img/minus.png' id="+user_id+" alt='Image' width='25px' height='25px' style='float:right;cursor:pointer'/></li></div>");     
         });

      $('body').on('click', '.remove_user', function () {
        var get_id = $(this).attr("id");
        //$('.my_remove_class .'+get_id).remove();

        $(this).closest(".my_remove_class").remove();
        
      });
        
      });


    </script>

    <script type="text/javascript">
    function Logout(){
    $.get("../Logout/Logout.php");
    }
 </script>

  </body>
  </html>
