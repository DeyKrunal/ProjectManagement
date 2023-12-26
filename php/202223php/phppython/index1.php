<html>
<head>
<script>
    function getEmail(x) 
    {
        var URL = "ValidateEmail.php?Q="+x;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() 
        {
            if (this.readyState == 4 && this.status == 200) 
            {
                document.getElementById("lblEmail").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", URL, true);
        xhttp.send();
    }
</script>
</head>
<body>
<form method="post">
    <table border=1 align="center" bgcolor="yellow">
        <tr>
            <td>Admin Name</td>
            <td><input type="text" name="txtName" placeholder="Enter Name"></td>
        </tr>
        <tr>
            <td>Email ID</td>
            <td><input type="text" name="txtEmail" placeholder="Enter Email" onblur="getEmail(this.value);"></td>
            <td><label for="txtEmail" id="lblEmail"></label></td>
        </tr>
        
        <tr>
            <td>Password</td>
            <td><input type="password" name="txtPwd" placeholder="Enter Password"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="btnSave" value="Submit">
            </td>
        </tr>

    </table>
</form>
</body>
</html>