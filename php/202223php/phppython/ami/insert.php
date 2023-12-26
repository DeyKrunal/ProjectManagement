<html><body>
<?php
include("connection.php");
if (isset($_REQUEST['bt1']))
{$a=$_REQUEST['t1'];
$b=$_REQUEST['t2'];
$c=$_REQUEST['t3'];
$d=$_REQUEST['t4'];

}
$query3=mysql_query("insert into test (sno,sname,city,course_no) values ('$a','$b','$c','$d')");
if($query3)
header('location:display.php');
?>
</body></html>
