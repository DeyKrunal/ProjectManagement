<?php
	$command_exec = escapeshellcmd('C:/Users/hp/AppData/Local/Programs/Python/Python310/python p2.py'); 
	$str_output = shell_exec($command_exec); 
	echo $str_output;
?>