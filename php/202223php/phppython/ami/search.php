<html><body>
<form name="form1" method="post" action="">
<label for="t1">Student no for Search
    <input type="text" name="t1"><input name="bt1" type="submit" value="search">
</label>
</form>
<?php
include('connection.php');
if(isset($_POST['bt1']))
{
$q1="select sno,sname,city,course_no from test where sno=".$_REQUEST['t1'];
$query1=mysql_query($q1);
echo "<table border='1'><tr><td>No</td><td>Name</td><td>city</td><td>course</td><td></td><td></td></tr>";
while($row=mysql_fetch_array($query1))
{
echo "<tr><td>".$row['sno']."</td>";
echo "<td>".$row['sname']."</td>";
echo "<td>".$row['city']."</td>";
echo "<td>".$row['course_no']."</td>";
}
}
?>
</body> </html>
