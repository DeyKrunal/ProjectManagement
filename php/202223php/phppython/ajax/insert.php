<html><body>
<?php
include("connection.php");
$a=$_REQUEST['sno'];
$b=$_REQUEST['sname'];
$query3=mysql_query("insert into astud (sno,sname) values ('$a','$b')");
//if($query3)
 
?>
</body></html>
