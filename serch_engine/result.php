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
		<form action="result.php" method="get">
			<div class="row" style="background:#f2f2f2">
				<div class="col-sm-1" style="margin-top: 17px;">
				
					<a href="search.php"><img src="img/search-engines.png" height="60px" ></a>
				</div>
				<div class="col-sm-6" style="margin-left: 5px">
					<div class="input-group" style="margin-top: 20px">
						<input type="text" class="form-control" name="search">
						<span class="input-group-btn"><input type="submit" class="btn btn-btn-secondary" name="search_box" value="Go!"></span>
					</div>
				</div>
			</div>
			
		</form>
	</div>



<div class="result">
	

<table>
	<tr>
		<?php 
			mysql_connect("localhost", "root", "");
			mysql_select_db("search");

			if(isset($_GET['search_box']))
			{
				$search = $_GET['search'];

				if($search=="")
				{
					echo "<center> <b>Please write something in Search Box!</b</center>";
						exit();
				}

				$sql ="SELECT * FROM website WHERE s_keyword like '%$search%' limit 0, 5";
				$rs = mysql_query($sql);
				if(mysql_num_rows($rs)<1)
				{
					echo "<center> <h4> <b> Oops! Not found !!! </b></h4></center>";
					exit();
				}

				echo "<font size='+1' color = '#9999ff'> Images for $search </font>";
				while ($row = mysql_fetch_array($rs)) {
						echo "<td>
								<table style='margin-top:10px'>
									<tr> 
										<td>
											<img src='img/$row[5]' height = '150px'>
										</td>
									</tr>
								</table>

							</td>";
				}
			}
		?>
	</tr>
</table>

								<?php
									echo "<a href='images.php?id=$search'><font size='+1' color= '#9999ff'> More Images for $search </font></a>";
									echo "<hr>";
									$sql1 = "SELECT * FROM website WHERE s_keyword like '%$search%'";

									$rs1 = mysql_query($sql1);

									while ($row1 =mysql_fetch_array($rs1)) {

										echo "<a href='$row1[2]'><font size='3' color = ' #003d99'> <b>  $row1[1] </b></font></a><br>";
										echo "<font size='2' color = '#00b300'> $row1[2] </font><br>";
										echo "<font size='2' color = ' #9494b8'> $row1[3] </font><br><br>";
									}
								?>
</div>



<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>