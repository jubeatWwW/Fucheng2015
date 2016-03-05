<?php
	$q = $_REQUEST["q"];
	$arr = explode("|",$q);
	if($arr[1]==bug)
	{
		mail("l6104400@gmail.com",$arr[0],nl2br($arr[2]));
	}
	else
	{
		mail("l6104400@gmail.com",$arr[0],nl2br($arr[2]));
	}
?>