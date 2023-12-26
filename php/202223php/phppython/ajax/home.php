<html>
<body>
student no<input type="text" id="sno">
student name<input type="text" id="sname">
<input type="button" value="insert" name="btn1" id="btn1">
<script>
$(document).ready(function(){
    $('btn1').on('click',function(){
        var sno=$('#sno').val();
        var sname=$('#sname').val();
        $.ajax({
            type:"POST",
            url:"insert.php",
            data:{sno:sno,sname:sname},
            success:function(data){
                if (data==1)
                {
                    disp_data();
                }
                else
                alert("not insert");
            }
        })
            })
})
</script>
<script>
function disp_data()
{
    $.ajax(
        {
            url: 'display.php',
            method: 'post',
            success: function(data)
            {
                data = $.parseJSON(data);
                if(data.status=='success')
                {
                    $('#table').html(data.html);
                }
            }
        })
}
</script>
</body>
</html>