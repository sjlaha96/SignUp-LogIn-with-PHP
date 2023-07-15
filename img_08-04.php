<html>
	<head>
		<title>Image</title>
	</head>
	<body>
		<form method="post" enctype="multipart/form-data">
			enter image:<input type="file" name="uploadimage"><br>
			<input type="submit" name="submit" value="submit">
		</form>
		<?php
			$filename=$_FILES["uploadimage"]["name"];//name of file
			//$_FILES[] used to call the image file
			$tempname=$_FILES["uploadimage"]["tmp_name"];//path of file
			$folder="image/".$filename; //file submitted in image folder
			move_uploaded_file($tempname, $folder);
			//to move the image into image folder
			echo "<img src='$folder'>";
			//this line will print the image as output
			
		?>
	</body>
</html>