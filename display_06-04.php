<?php
	include("connection_06-04.php");
	$sql="SELECT * FROM mini_project_user";
	$data=mysqli_query($conn,$sql);
	//$result=mysqli_fetch_assoc($data);
	//print_r($result);
	//$result is an associative array for using mysqli_fetch_assoc(), so it is printed with print_r
	//print_r($result["name"]);
?>
<table border="1">
	<tr>
		<th>SL.NO.></th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Phone</th>
		<th>Picture</th>
		<th>Action</th>
	</tr>
	<?php
		$i=1;
		//we take this $i for serial number
		while($result=mysqli_fetch_assoc($data))
		{
			?>
			<tr>
				<td><?php echo $i;$i++; ?></td>
				<td><?php echo $result["name"] ?></td>
				<td><?php echo $result["email"] ?></td>
				<td><?php echo $result["password"] ?></td>
				<td><?php echo $result["phone"] ?></td>
				<td><img src="<?php echo $result['pic_source'] ?>" height="100" width="100"></td>
				<td>
					<a href="edit_11-04.php?ep=<?php echo $result['user_id'] ?>">Edit</a>
					<a href="delete_11-04.php?del=<?php echo $result['user_id'] ?>">Delete</a>
					<!-- here ep=edit profile -->
				</td>
			</tr>
			<?php
		}
		//We need to print whole table data as output, in html table format
		//So we need to write this php code again
		//Within td tag we write again php tag
		//This tag helps to give output of php code in form of html code
	?>
</table>