<?php 
	$servername = "dbhome.cs.nctu.edu.tw";
	$account = "";
	$password = "";
	$link = mysql_connect($servername,$account,$password)or die("Could not connect : " . mysql_error()); 
	mysql_select_db("cwlin6104400_cs") or die("Could not select database"); 
	mysql_query("SET NAMES 'UTF8'");
	$query = "DELETE FROM fucheng1 WHERE id='t'";
	$result = mysql_query($query) or die("Query failed : " . mysql_error()); 
?>
