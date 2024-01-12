<?php
require_once("connection.php");

// if(isset($_REQUEST['del']))
// {
//     $pid=$_REQUEST['del'];
    // mysqli_query($con,"delete from emp where id="1"");
// }

$res=mysqli_query($con,"select * from emp");
while($row=mysqli_fetch_array($res)){
    echo $row[0];
    echo $row[1];
    echo $row[2];

}

// require_once("admindeshboard.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>