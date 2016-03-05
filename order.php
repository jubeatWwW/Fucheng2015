<?php
	$q = $_REQUEST["q"];
	$servername = "dbhome.cs.nctu.edu.tw";
	$account = "";
	$password = "";
	$link = mysql_connect($servername,$account,$password)or die("Could not connect : " . mysql_error()); 
	mysql_select_db("cwlin6104400_cs") or die("Could not select database"); 
	mysql_query("SET NAMES 'UTF8'");
	$arr = explode(">",$q);
	$data = array('NULL','NULL','NULL','NULL','NULL','NULL','NULL','NULL');
	$mango = array(0,0,0);
	$puff = 0;
	$pudding = array(0,0,0,0);
	$cheeseTower = array(0,0,0);
	$snack = array(0,0,0,0,0);
	$peanut = array(0,0,0,0);
	$cookies = 0;
	$yam = 0;
	$money = 0;
	$cart = array(0,0,0,0,0,0,0,0);
	/*$query = "INSERT INTO test (name) VALUES ('$v')";
	$result = mysql_query($query) or die("Query failed : " . mysql_error());*/ 
	foreach($arr as $index => $value)
	{
		$d = explode(",",$value);
		switch($index)
		{
			case 0:
				foreach($d as $i => $v)
					$data[$i] = $v;
					
			break;
			case 1:
				foreach($d as $i => $v)
				{
					if($v>0)
						$cart[$index-1] = 1;
					$mango[$i] = $v;
				}
					
			break;
			case 2:
				if($value>0)
					$cart[$index-1] = 1;
				$puff = $value;
			break;
			case 3:
				foreach($d as $i => $v)
				{
					if($v>0)
						$cart[$index-1] = 1;
					$pudding[$i] = $v;
				}
			break;
			case 4:
				foreach($d as $i => $v)
				{
					if($v>0)
						$cart[$index-1] = 1;
					$cheeseTower[$i] = $v;
				}
			break;
			case 5:
				foreach($d as $i => $v)
				{
					if($v>0)
						$cart[$index-1] = 1;
					$snack[$i] = $v;
				}
			break;
			case 6:
				foreach($d as $i => $v)
				{
					if($v>0)
						$cart[$index-1] = 1;
					$peanut[$i] = $v;
				}
			break;
			case 7:
				if($value>0)
					$cart[$index-1] = 1;
				$cookies = $value;
			break;
			case 8:
				if($value>0)
					$cart[$index-1] = 1;
				$yam = $value;
			break;
			case 9:
				$money = $value;
			break;
		}
	}
	$query1 = "INSERT INTO fucheng1 (name, id, department, grade, email, cellphone, dorm,room,mango1,mango2,mango3,puff1,pudding1,pudding2,pudding3,pudding4,cheeseTower1,cheeseTower2,cheeseTower3,snack1,snack2,snack3,snack4,snack5,peanut1,peanut2,peanut3,peanut4,cookies1,yam1,money) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$mango[0]','$mango[1]','$mango[2]','$puff','$pudding[0]','$pudding[1]','$pudding[2]','$pudding[3]','$cheeseTower[0]','$cheeseTower[1]','$cheeseTower[2]','$snack[0]','$snack[1]','$snack[2]','$snack[3]','$snack[4]','$peanut[0]','$peanut[1]','$peanut[2]','$peanut[3]','$cookies','$yam','$money')";
	$result1 = mysql_query($query1) or die("Query1 failed : " . mysql_error());
	echo "success";
	mysql_close($link);
	$to = $data[4];
	$subject="府城週訂購資料";
	$message = "親愛的: ".$data[0]."\n";
	$message .= "以下是您在府城周的訂購資料\n\n";
	for($i=0;$i<8;$i++){
		if($cart[$i]==1)
		{
			switch($i)
			{
				case 0:
					$message .= "芒果乾: 愛文: ".$mango[0]." 凱特: ".$mango[1]." 水果乾: ".$mango[2]."\n\n";
				break;
				case 1:
					$message .= "手指泡芙: ".$puff."\n\n";
				break;
				case 2:
					$message .= "伊蕾特布丁: 可可: ".$pudding[0]." 芒果: ".$pudding[1]." 芝麻: ".$pudding[2]." 鮮奶: ".$pudding[3]."\n\n";
				break;
				case 3:
					$message .= "伊蕾特乳酪塔: 檸檬: ".$cheeseTower[0]." 蔓越莓: ".$cheeseTower[1]." 芒果: ".$cheeseTower[2]."\n\n";
				break;
				case 4:
					$message .= "西井村滷味: 豆干: ".$snack[0]." 雞胗: ".$snack[1]." 翅小腿: ".$snack[2]." 雞翅膀: ".$snack[3]." 冰雞爪凍: ".$snack[4]."\n\n";
				break;
				case 5:
					$message .= "大灣花生糖: 綜合: ".$peanut[0]." 花生捲: ".$peanut[1]." 顆粒花生糖+芝麻軟糖: ".$peanut[2]." 芝麻軟糖: ".$peanut[3]."\n\n";
				break;
				case 6:
					$message .= "章成麥芽餅: ".$cookies."\n\n";
				break;
				case 7:
					$message .= "瓜瓜園: ".$yam."\n\n";
				break;
			}
		}
	}
	$message .= "\n總金額: ".$money."\n\n";
	$message .= "\n領貨時間 : 4/27(一)-5/1(五) 17:30-19:00\n";
	$message .= "領貨地點 : 4/27(一)-5/1(五) 二餐外露台\n";
	$message .= "連絡電話: 總召 林玟綺 0988724854 訂購長 方語萱 0936260610\n\n";
	$message .= "此郵件為自動發送，請勿直接回復";
	mail($to,$subject,$message);
?>
