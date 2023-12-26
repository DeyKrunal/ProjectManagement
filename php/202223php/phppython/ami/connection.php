<?php 
$HOSTNAME='localhost';
$UNAME='root';
$PASSWORD='';
$DBNAME='trial';
//server connect
$db_con=mysql_connect($HOSTNAME,$UNAME,$PASSWORD);
//data connect
$db_name=mysql_select_db($DBNAME,$db_con);
?>
