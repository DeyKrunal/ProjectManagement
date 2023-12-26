<?php 
$cnn = mysqli_connect("localhost","root","","dbclg") or die("Cant Connect");

$Email = $_REQUEST["Q"];
$str = "select * from tbladmin where EmailID='$Email'";
$Result= mysqli_query($cnn,$str) or die(mysqli_error($cnn));
if(mysqli_num_rows($Result)>0)
{
    echo "Email already in registered.";
} 
else
{
    echo "Go Ahead";
}
?>