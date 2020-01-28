<?php
require "info.php";
$a = PHP_EOL."____________________".PHP_EOL.$_POST[confession].PHP_EOL."____________________".PHP_EOL;
$f = fopen('sub.dat','a');
$v = true;
$v = $v && fwrite($f,$a);
$v = $v && fclose($f);
session_start();
if (v) header("Location: success.php");
else header("Location: failure.php");
die();
?>