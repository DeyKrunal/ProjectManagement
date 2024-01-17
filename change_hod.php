<?php
require_once("connection.php");

$id=$_REQUEST['id'];
mysqli_query($con,"update headfaculty_tbl set h_status=0");
$res=mysqli_query($con,"insert into headfaculty_tbl (fid,h_status,h_year) values($id,1,2024) ");

header("location:head_faculty.php");

?>