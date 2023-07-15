<?php
	include("connection_06-04.php");
	//include() calls the file connection_06-04.php
	$name= $_REQUEST['name'];
	$email= $_REQUEST['email'];
	$password= $_REQUEST['password'];
	//m5= message digest algorithm for password peotection
	$phone= $_REQUEST['phone'];
	$filename=$_FILES["uploadimage"]["name"];//name of file
	$tempname=$_FILES["uploadimage"]["tmp_name"];//path of file
	$folder="image/".$filename; //file submitted in image folder
	move_uploaded_file($tempname, $folder);

	$sql="INSERT INTO `mini_project_user`(`user_id`, `name`, `email`, `password`, `phone`,`pic_source`) VALUES ('','$name','$email','$password','$phone','$folder')";
	//we need to print path of picture file
	$data= mysqli_query($conn,$sql);
	//here $conn= connection parameter, $sql= query parameter
	if($data)
	{
		//echo "Insert data successfully";
		//header("location:display_06-04.php");
		//this header function helps to redirect the output into table insertion page i.e. display_06-04.php output page
		header("location:login_08-04.php");
	}
	else
	{
		echo "No data inserted";
	}
?>