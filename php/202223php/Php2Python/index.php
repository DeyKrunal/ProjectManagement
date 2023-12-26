<?php
    $cmd = escapeshellcmd("Test.py");
    $Ans = shell_exec($cmd);
    echo $Ans;
?>