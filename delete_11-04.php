<?php
	include("connection_06-04.php");
	$id=$_REQUEST['del'];
	$sql="DELETE FROM mini_project_user WHERE user_id=$id";
	$data=mysqli_query($conn,$sql);
	if($data)
	{
		header("location:display_06-04.php");
	}
	else
	{
		echo "Not deleted";
	}
?>