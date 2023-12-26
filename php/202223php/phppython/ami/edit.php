<html> <body>
<?php
include('connection.php');
if(isset($_GET['sno']))
{
$sno=$_GET['sno'];
$query1=mysql_query("select * from test where sno='$sno'");
$row=mysql_fetch_array($query1);


if(isset($_POST['submit']))
{
$sname=$_REQUEST['t2'];
$city=$_REQUEST['t3'];
$course=$_REQUEST['t4'];
$query3=mysql_query("update test set sname='$sname', city='$city',course_no='$course' where sno='$sno'");
if($query3)
header('location:display.php');
}
?>
<form method="post" action="">
Sno:<input type="text" name="t1" value="<?php echo $row['sno']; ?>" /><br />
Name:<input type="text" name="t2" value="<?php echo $row['sname']; ?>" /><br />
City:<input type="text" name="t3" value="<?php echo $row['city']; ?>" /><br /><br />
Course:<input type="text" name="t4" value="<?php echo $row['course_no']; ?>" /><br /><br />
<br />
<input type="submit" name="submit" value="update" />
</form>
<?php
}
?>
</body></html>
