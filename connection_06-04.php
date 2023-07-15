<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db="laha_96";
	$conn=mysqli_connect($servername,$username,$password,$db);
	if($conn)
	{
		//echo "Connection successful";
	}
	else
	{
		echo "Not connected";
	}
?>