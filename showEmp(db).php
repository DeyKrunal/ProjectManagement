<?php
include 'connection.php';

//   $s1="select id,name,city,gender,shift,salary,upload_pic,dept_name from empinfo e,depttb d where e.dept_id=d.dept_id";

//$s="select *from empinfo";
// $record=mysqli_query($con,$s1);

// if(!$record)
// 	{die("Invalid Query".mysqli_error());}

// if(mysqli_num_rows($record==0))
// 	{echo "No Rows Found.";}

?>
<html>
<br><br><input type="text" name="search" placeholder="Search by name">
<input type="submit" name="btnSearch" value="search"><br><br>
<body><a href="addEmp(db).php">Add Emp</a> 
<table border="1">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>City</th>
		<th>Gender</th>
		<th>Shift</th>
		<th>Salary</th>
		<th>Upload Picture</th>
		<th>DeptName</th>

		<th>Edit</th>
		<th>Delete</th>
		<th>Download</th>
	</tr>
<?php
	while($row=mysqli_fetch_array($record))
	{
?>
	<tr>
		<td><?php echo $row[0]?></td>	
		<td><?php echo $row[1]?></td>	
		<td><?php echo $row[2]?></td>	
		<td><?php echo $row[3]?></td>	
		<td><?php echo $row[4]?></td>	
		<td><?php echo $row[5]?></td>
		<td><img src="<?php echo $row[6]; ?>" height="50" width="50"></td>
		<td><?php echo $row[7]?></td>

		<td><a href="editEmp(db).php?id=<?php echo $row[0];?>">Edit</a></td>
	<td><a href="delEmp(db).php?id=<?php echo $row[0];?>">Delete</a></td>
		<td><a href="editEmp(db).php?id=<?php echo $row[6];?>">Download</a></td>

	</tr>

	<?php
	}
	mysqli_close($con);
	?>

</table>
</body>
</html>