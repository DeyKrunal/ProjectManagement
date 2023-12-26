<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$conn=mysql_connect("localhost","root","")	or	die("ERROR:		Could	not	connect."); 
mysql_select_db("ami",$conn)	or	die("ERROR:	Could	not	find		database.	");
$resultset=mysql_query("select * from stud",$conn) or die(mysql_error());
 while($row=mysql_fetch_array($resultset))
{
echo $row[0]."-".$row[1]."<br>";
}
$resultset=mysql_query("select * from stud",$conn) or die(mysql_error());
while($row=mysql_fetch_row($resultset))
{
echo $row[0]; //returns 1st record's first column value 
echo $row[1]; //returns 1st record's second column value
}


$resultset=mysql_query("select * from stud",$conn) or die(mysql_error());
while($row=mysql_fetch_assoc($resultset))
{
echo $row['sno']."<br>";
echo $row['sname']."<br>";
}

$resultset=mysql_query("select * from stud",$conn) or die(mysql_error());
echo "Total fields are:".mysql_num_fields($resultset);

$resultset=mysql_query("select * from stud",$conn) or die(mysql_error());
while($row=mysql_fetch_object($resultset))
{
echo $row->sno."<br/>";
}

?>

</body>
</html>
