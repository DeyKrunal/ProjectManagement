<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
function division($x,$y)
{
try
{
	if ($x/$y==0)
		{throw new Exception("anwer is 0");
		 }
	else
		return $x/$y;
}
catch(Exception $e)
{ echo 'Message: ' .$e->getMessage();
}

}
echo division(5,0);
?>
</body>
</html>
