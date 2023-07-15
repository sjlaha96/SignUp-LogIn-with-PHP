<?php
	include("connection_06-04.php");
	$id= $_REQUEST['ep'];
	echo $id;
	$sql="SELECT * FROM mini_project_user WHERE user_id='$id'";
	$data=mysqli_query($conn,$sql);
	$result=mysqli_fetch_assoc($data);
	print_r($result);
?>
<html>
	<head>
		<title>Mini Project</title>
	</head>
	<body>
		<form method="post" action="edit_action_11-04.php" enctype="multipart/form-data"><br>
			Enter Name: <input type="text" name="name" value="<?php echo $result['name'] ?>"><br>
			<input type="text" name="uid" value="<?php echo $id ?>" hidden>
			Enter Email: <input type="email" name="email" value="<?php echo $result['email'] ?>"><br>
			Enter Phone: <input type="text" name="phone" value="<?php echo $result['phone'] ?>"><br>
			enter image:<input type="file" name="uploadimage"><br>
			<input type="submit" name="submit" value="submit">
		</form>
	</body>
</html>