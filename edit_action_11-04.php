<?php
	include("connection_06-04.php");
	//include() calls the file connection_06-04.php
	$id=$_REQUEST['uid'];
	$name= $_REQUEST['name'];
	$email= $_REQUEST['email'];
	//m5= message digest algorithm for password peotection
	$phone= $_REQUEST['phone'];
	$filename=$_FILES["uploadimage"]["name"];//name of file
	$tempname=$_FILES["uploadimage"]["tmp_name"];//path of file
	$folder="image/".$filename; //file submitted in image folder
	move_uploaded_file($tempname, $folder);

	$sql="UPDATE `mini_project_user` SET `name`='$name',`email`='$email',`phone`='$phone',`pic_source`='$folder' WHERE `user_id`='$id'";
	//we need to print path of picture file
	$data= mysqli_query($conn,$sql);
	//here $conn= connection parameter, $sql= query parameter
	if($data)
	{
		header("location:display_06-04.php");
	}
	else
	{
		echo "Not updated";
	}
?>