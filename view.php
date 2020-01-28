<?php
require "info.php";
$f = file('sub.dat');
if ($_POST['passin']==$passout) 
	foreach ($f as $line)
		echo $line.'<br/>';
else echo "Wrong password!";
?>