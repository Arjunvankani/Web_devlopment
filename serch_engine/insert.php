<!DOCTYPE html>
<html>
	<head>
		<title> Search Engine</title>
		<!-- CSS only -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	</head>
	<body>
		<div class="container-fluid">
			<br>
			<center> <h2><b> Insert Website</b> </h2></center>
		</div>

		<form action="insert.php" method="post" enctype="multipart/form-data">

			<div class="form-group">
				<div class="row">
					<label class="col-sm-2 " style="margin-left: 200px" for="stitle"> Site Title</label>

					<div class="col-sm-6">
							<input type="text" class="form-control" id="stitle" name="s_title" placeholder="Site Title" required>						
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-sm-2" style="margin-left: 200px" for="slink"> Site Link</label>

					<div class="col-sm-6">
							<input type="text" class="form-control" id="slink" name="s_link" placeholder="Enter Link" required>						
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<label class="col-sm-2" style="margin-left: 200px" for="skeyword"> Site Keyword</label>

					<div class="col-sm-6">
							<input type="text" class="form-control" id="skeyword" name="s_keyword" placeholder="Enter Keyword" required>						
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-sm-2" style="margin-left: 200px" for="sdesc"> Site Description</label>

					<div class="col-sm-6">
							<textarea class="form-control" id="sdesc" name="s_desc" placeholder="Enter Description" required></textarea> 					
					</div>
				</div>
			</div>
				<div class="form-group">
				<div class="row">
					<label class="col-sm-2"  style="margin-left: 200px"for="s_img" > Site Image</label>

					<div class="col-sm-6">
							<input type="file"  id="s_img" name="s_img" required>	
					</div>
				</div>
				</div>
				<div class="form-group">
				<div class="row">
						<center>
								<input type="submit"style="margin-left: 200px" class="btn btn-success" name="submit" value="Add website">
								&nbsp;
								<input type="submit"style="margin-left: 50px" class="btn btn-danger" name="cancel" value="Cancel">
						</center>
				</div>
			</div>
		</form>




<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>

<?php
		
		mysql_connect("localhost","root","");
		mysql_select_db("search");
		
		if(isset($_POST["submit"]))
		{
			$s_title = addslashes($_POST["s_title"]);
			$s_link = addslashes($_POST["s_link"]);
			$s_keyword = addslashes($_POST["s_keyword"]);
			$s_desc = addslashes($_POST["s_desc"]);
			$s_img = addslashes($_FILES["s_img"] ["name"]);

			if(move_uploaded_file($_FILES["s_img"] ["tmp_name"], "img/".$_FILES["s_img"] ["name"]))
			{
				$sql = "INSERT INTO website(s_title, s_link, s_keyword, s_desc, s_img) VALUES ('$s_title', '$s_link', '$s_keyword', '$s_desc', '$s_img')";
				$rs = mysql_query($sql);
				if($rs)
				{
					echo "<script> alert('Site uploaded successfully')</script>";
				}
				else
				{
					echo "<script> alert('Uploaded Falied ,Please try again!')</script>";
				}
			}
		}

  ?>