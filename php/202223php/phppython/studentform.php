<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include('connection.php');
if (isset($_POST['submit']))
{
	if (empty($_POST["sno"]) || empty($_POST["sname"]) || empty($_POST["phno"]) ||empty($_POST["email"]) )
     $errMsg = "Error! You didn't enter value";  
 	 else 
	 {
     //$sno = $_POST["sno"];  
	 //$sname = $_POST["sname"];  
	 //$phno = $_POST["phno"];  
	 //$semail = $_POST["semail"];  
	 if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
	 $emailErr = "Invalid email format";
	 else
	 $email = $_POST["email"];  
	 
	 
	 }
	 $sno=$_POST['sno'];
	 $sname=$_POST['sname'];
	 $city=$_POST['city'];
	 $email=$_POST['email'];
	 $phno=$_POST['phno'];
	 echo "hsdf";
mysql_query("insert into stud1 (sno,sname,city,email,phno) values ('$sno','$sname','$city','$email','$phno')");

} 

?>
<p>&nbsp;</p>
<FORM METHOD="POST">
<table width="730" border="0">
  <tr>
    <td width="50">Student no</td>
    <td width="291"><input name="sno" type="text" id="sno"  value="" /><?php echo $errMsg; ?></td>
  </tr>
  <tr>
    <td>Student name</td>
    <td><input name="sname" type="text" id="sname" value=""/><?php echo $errMsg; ?></td>
  </tr>
  <tr>
    <td>City</td>
    <td><select name="city" id="city">
      <option value="Surat">Surat</option>
      <option value="Vapi">Vapi</option>
      <option value="Baroda">Baroda</option>
    </select>    </td>
  </tr>
  <tr>
    <td>Phone number </td>
    <td><input name="phno" type="text" id="phno" value=""/><?php echo $errMsg; ?></td>
  </tr>
<tr>
    <td width="50">Email Address </td>
    <td width="291"><input name="email" type="text" id="email" value=""/><?php echo $errMsg.$emailErr; ?></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td><input name="rb" type="radio" value="1" checked="checked" />
      Female 
      <input name="rb" type="radio" value="2" />
      Male
      <input name="rb" type="radio" value="0" />
      Other</td>
  </tr>
  
  <tr>
    <td colspan="2"><input name="submit" type="submit" id="Save" value="Save" />
      <input name="Delete" type="submit" id="Delete" value="Delete" />
      <input name="Update" type="submit" id="Update" value="Update" />
      <input name="Search" type="submit" id="Search" value="Search" /></td>
    </tr>
</table>
</FORM>

</body>
</html>
