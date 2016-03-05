<?php
	$tele = $_REQUEST["tele"];
	$servername = "dbhome.cs.nctu.edu.tw";
	$account = "";
	$password = "";
	$link = mysql_connect($servername,$account,$password)or die("Could not connect : " . mysql_error()); 
	mysql_select_db("cwlin6104400_cs") or die("Could not select database"); 
	mysql_query("SET NAMES 'UTF8'");
	$alldata = mysql_query("SELECT * FROM fucheng1 WHERE cellphone='$tele'");
	$isfirst = true;
	while($row = mysql_fetch_array($alldata))
	{
		echo $row['name'].",";
		echo $row['id'].",";
		echo $row['department'].",";
		echo $row['grade'].",";
		echo $row['email'].",";
		echo $row['cellphone'].",";
		echo $row['dorm'].",";
		echo $row['room'];
		echo ">";
		echo $row['mango1'].",";
		echo $row['mango2'].",";
		echo $row['mango3'];
		echo ">";
		echo $row['puff1'];
		echo ">";
		echo $row['pudding1'].",";
		echo $row['pudding2'].",";
		echo $row['pudding3'].",";
		echo $row['pudding4'];
		echo ">";
		echo $row['cheeseTower1'].",";
		echo $row['cheeseTower2'].",";
		echo $row['cheeseTower3'];
		echo ">";
		echo $row['snack1'].",";
		echo $row['snack2'].",";
		echo $row['snack3'].",";
		echo $row['snack4'].",";
		echo $row['snack5'];
		echo ">";
		echo $row['peanut1'].",";
		echo $row['peanut2'].",";
		echo $row['peanut3'].",";
		echo $row['peanut4'];
		echo ">";
		echo $row['cookies1'];
		echo ">";
		echo $row['yam1'];
		echo ">";
		echo $row['money'];
	}
	
	
?>
