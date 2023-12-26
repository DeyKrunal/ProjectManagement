<html>
<head>
<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getuser.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>

<form>
<select name="users">
  <option value="">Select a person:</option>
  <option value="1">Raj</option>
  <option value="2">Radha</option>
  </select>
  <input type="button" name="Submit" value="Submit" onclick="getuser.php?q=$_GET['users']">
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

</body>
</html>