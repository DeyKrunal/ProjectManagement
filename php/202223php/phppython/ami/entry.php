<html>
<head>
<script>
    function getEmail(x) 
    {echo x;
        var URL = "course.php?Q="+x;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() 
        {
            if (this.readyState == 4 && this.status == 200) 
            {
                document.getElementById("t4").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", URL, true);
        xhttp.send();
    }
</script>

</head>
<body>
<form id="form1" name="form1" method="post" action="insert.php">
  <table width="200" border="1">
    <tr>
      <td colspan="2">student entry </td>
    </tr>
    <tr>
      <td><label for="t1">sno</label>&nbsp;</td>
      <td><input type="text" name="t1" /> </td>
    </tr>
    <tr>
      <td><label for="t2">sname</label></td>
	<td>  <input type="text" name="t2" id="textfield" /></td>
    </tr>
    <tr>
      <td><label for="t3">city</label></td>
	<td>  <input type="text" name="t3" id="textfield" /></td>
    </tr>
    <tr>
      <td><label for="t4">course</label></td>
	<td>  <input type="text" name="t4" id="t4" onclick="getEmail(this.value);"/></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bt1" value="insert" />
	<input type="reset" name="reset" value="reset" />
	</td>
        </tr>
  </table>
</form>
</body>
</html>
