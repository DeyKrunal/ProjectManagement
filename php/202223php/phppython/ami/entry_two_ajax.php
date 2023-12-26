<html>
<head>
<script>
function checkcourse(str) 
{
  if (str == "") 
{
    	document.getElementById("result").innerHTML = "";
    	return;
  	} else {
    	var xmlhttp = new XMLHttpRequest();
    	xmlhttp.onreadystatechange = function() 
{
      	if (this.readyState == 4 && this.status == 200) {
        	document.getElementById("result").innerHTML = this.responseText;
      	}
    	};
    xmlhttp.open("GET","course.php?q="+str,true);
//true for asynchronous data
    xmlhttp.send();
  }
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
			<td>Course</td>
			<td>
	    <input type="text" name="t4" onblur="checkcourse(this.value)">
        <div id="result">
			</td>
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

