<?php
	$check = $_REQUEST["check"];
	$servername = "dbhome.cs.nctu.edu.tw";
	$account = "";
	$password = "";
	$link = mysql_connect($servername,$account,$password)or die("Could not connect : " . mysql_error()); 
	mysql_select_db("cwlin6104400_cs") or die("Could not select database"); 
	mysql_query("SET NAMES 'UTF8'");
	$result = mysql_query("SELECT cellphone FROM fucheng1 WHERE cellphone='$check'");
	echo mysql_num_rows($result);
?>
