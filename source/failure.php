<!DOCTYPE html>

<html>
<head>
<link rel="shortcut icon" href="favicon.ico"/>
<meta charset="UTF-8"/>
<meta type="description" content="The unofficial confession-submission site for JUET, Guna."/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<?php
require "info.php";
?>
<title>Confessions@JUET: Let your voice be heard!</title>
<style>
<!--

body {
	background-color: #87CEFA;
	
}

#submit {
	background-color: #E0E0F0;
	transition: .2s;
	-webkit-transition: .2s;
	text-decoration: none;
	color: #000000;
	font-size: 20px; 
	font-weight: medium;
	border-radius: 9px;
}

#submit:hover {
	background-color: #3F2020;
	transition: .2s;
	-webkit-transition: .2s;
	font-size: 23px;
	text-shadow: 0px 0px 3px #FFFFFF;
	color: #FFFFFF;
}

a.s {
	transition: .2s;
	-webkit-transition: .2s;
	text-decoration: none;
	color: #220000;
	text-shadow: 0px 0px 1px #000000;
	font-weight: medium;
	border-radius: 9px;
}

a:hover {
	background-color: #3F2020;
	transition: .2s;
	-webkit-transition: .2s;
	padding: 4px;
	text-shadow: 0px 0px 3px #FFFFFF;
	color: #FFFFFF;
}

header {
	text-align: center;
	background-color: #E8E8FF;
	border-radius: 0px 0px 5px 5px;
}

h1 {
	height: 18px;
	font-size: 40px;
	text-shadow: 1px 1px 1px #000000;
	margin-top: 3px;
	transition: .5s;
	-webkit-transition: .5s;
}

h1:hover {
	transition: 5s;
	-webkit-transition: 5s;
	color: #777777
}

#main {
	text-align: center;
	margin-top: 10px;
	margin-bottom: 13px;
	background-color: #FFFFFF;
	padding-top: 14px;
	padding-bottom: 10px;
	width: 70%;
	margin-left: auto;
	margin-right: auto;
	border-radius: 10px;
}

-->
</style>

</head>
<body>
<header>
<br/>
<img src="header.jpg" style="border-radius: 13px; display: block; margin-left: auto; margin-right: auto; width: 90%;"/>
<h1>Confessions@JUET</h1>
<span style="font-style: italic; font-weight: light; font-weight: bold;">Let your voice be heard!</span>
</header>
<div id="main" style="font-size: 20px;">
<?php
echo "Oops! Something went wrong. Please try again later.";
?>
<br/><br/><a style="font-size: 22px" class="s" href="index.php">Try again</a>
</div>
<footer><hr style="color: #FFFFFF;"/>
<div style="text-align: center; word-spacing: 7px;">
<?php
echo "<a href=\"index.php\">Home</a> | <a href=\"about.php\">About</a> | <a href=\"$insta\">Instagram</a> | <a href=\"http://juet.ac.in\">JUET</a> | <a href=\"http://webkiosk.juet.ac.in\">Webkiosk</a>";
?>
</div>
</footer>
</body>
</html>