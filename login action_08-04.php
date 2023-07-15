<?php
	include("connection_06-04.php");
	$email= $_REQUEST['email'];
	$password= $_REQUEST['password'];
	$sql="SELECT * FROM mini_project_user WHERE email='$email' AND password='$password'";
	$data=mysqli_query($conn,$sql);
	$total=mysqli_num_rows($data);
	//mysqli_num_rows() returns the tuple, fetch data from $data
	if($total)
	{
		//echo "Login success";
		header("location:display_06-04.php");
	}
	else
	{
		echo "Login failure";
	}
?>