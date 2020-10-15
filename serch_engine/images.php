<!DOCTYPE html>
<html>
<head>
	<title>Result Found</title>
	<!-- CSS only -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


		<style >
			.result{
				margin-left:10%; margin-right: 25%; margin-top: 12px;
			}
		</style>
</head>
<body>

	<div class="container-fluid">

		<?php 

			$search = $_GET["id"];
			mysql_connect("localhost", "root", "");
			mysql_select_db("search");


				$sql ="SELECT * FROM website WHERE s_keyword like '%$search%'";
				$rs = mysql_query($sql);

				while ($row = mysql_fetch_array($rs)) {
					echo "<a href='img/$row[5]' download><img src='img/$row[5]' height='200px' style='margin-top: 15px'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			}
		?>
	</div>






<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</body>
</html>