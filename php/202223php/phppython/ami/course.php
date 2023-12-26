<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$q = $_GET['q'];
$con = mysql_connect("localhost","root","");
mysql_select_db("trial",$con);
$result = mysql_query("SELECT * FROM course WHERE course_no='$q'",$con);
while($row = mysql_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['course_name'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
</body>
</html>
