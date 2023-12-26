<html><body>
<?php
include("connection.php");
if(isset($_GET['sno']))
{
$sno=$_GET['sno'];
$query1=mysql_query("delete from test where sno='$sno'");
if($query1)
header('location:display.php');
}
?>
</body></html>
