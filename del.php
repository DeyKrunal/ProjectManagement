<?php
require_once("connection.php");

$eid=$_GET['del'];
$res=mysqli_query($con,"select img from emp where id='$eid'");
$row=mysqli_fetch_array($res);
mysqli_query($con,"delete from emp where id='$eid'");
if(file_exists("upload/".$row[0])) {
    unlink("upload/".$row[0]);
}
header("location:students.php");

?>