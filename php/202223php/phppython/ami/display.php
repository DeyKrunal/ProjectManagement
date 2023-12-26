<html>
<body>
<?php
include('connection.php');
$query1=mysql_query("select sno,sname,city,course_no from test");
echo "<table border='1'><tr><td>No</td><td>Name</td><td>city</td><td>course</td><td></td><td></td></tr>";
while($row=mysql_fetch_array($query1))
{
echo "<tr><td>".$row['sno']."</td>";
echo "<td>".$row['sname']."</td>";
echo "<td>".$row['city']."</td>";
echo "<td>".$row['course_no']."</td>";
echo "<td><a href='edit.php?sno=".$row['sno']."' >Edit</a></td>";
echo "<td><a href='delete.php?sno=".$row['sno']."'>delete</a></td><tr>";
}
echo "<td><a href='entry.php'>insert</a></td>";
echo "<td><a href='search.php'>search</a></td>";
?>
</table>
</body></html>
