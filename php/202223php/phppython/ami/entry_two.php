<html>
<head>
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
				<?php include('connection.php');
					$str = "select course_no,course_name from course";
					$rs = mysql_query($str);
					
				?>
				<select name="t4" >
					<?php 
						while($res = mysql_fetch_array($rs))
						{
					?>
						<option value="<?php echo $res['course_no'];?>" > <?php echo $res['course_name']; ?>
                        </option>
					<?php 
						}
					?>	
				</select>
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

