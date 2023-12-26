<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$q = $_GET['q'];
$con = mysql_connect("localhost","root","");
mysql_select_db("trial",$con);
$result = mysql_query("SELECT * FROM test WHERE sno='$q'",$con);

echo "<table>
<tr>
<th>Firstname</th>
<th>City</th>
</tr>";
while($row = mysql_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['sno'] . "</td>";
  echo "<td>" . $row['city'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
</body>
</html>
