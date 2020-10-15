

<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<title>Image Upload </title>
	<style>
	
		html, body{background: #ececec; height: 100%; margin: 0; font-family: Arial;}
		.main{height: 100%; display: flex; justify-content: center;}
		.main .image-box{width:300px; margin-top: 30px;}
		.main h2{text-align: center; color: #4D4D4D;}
		.main .tb{width: 100%; height: 40px; margin-bottom: 5px; padding-left: 5px;}
		.main .file_input{margin-top: 10px; margin-bottom: 10px;}
		.main .btn{width: 100%; height: 40px; border: none; border-radius: 3px; background: #27a465; color: #f7f7f7;}
		.main .msg{color: red; text-align: center;}
	
	</style>
	</head>

	<body>
	<!-------------------Main Content------------------------------>
	<div class="container main" >
		<div class="image-box">
			<h2>Image Upload</h2>
			<form method="POST" name="upfrm" action="upload-code.php" enctype="multipart/form-data">

				<div>
					<input type="text" placeholder="Enter image name" name="img-name" class="tb" />
					<input type="file" name="fileImg" class="file_input" />
					<input type="submit" value="Upload" name="btn_upload" class="btn" />
					
				</div>
			</form>
			<div class="msg">
				
			</div>
			<h2>Image Fetch</h2>
			<form method="POST" name="upfrm" action="fetch.php" enctype="multipart/form-data">

				<div>
				
					<input type="int" placeholder="Enter image Id" name="img_id" class="tb" />
					<input type="submit" value="Fetch" name="btn_fetch" class="btn"  />

				</div>
		</form>
			<div class="msg">
				
			</div>
		</div>
	</div>
	</body>
	</html>
	