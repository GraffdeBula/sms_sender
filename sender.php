<?php
	header('Content-Type: text/html; charset=windows-1251');
	include 'smsc_api.php';

	define(DB_NAME, '192.168.1.92:C:\AvtoAdvoBase/AvtoAdboBase.fdb');
	define(DB_USER, 'superad');
	define(DB_PASS, 'adm#2301');

	$link=ibase_connect(DB_NAME,DB_USER,DB_PASS);

	$query="SELECT CLSEX,CLFNAME,CL1NAME,CL2NAME,CLMOBPHONE1,CLMOBPHONE2,CLBIRTHDAT,CLBIRTHDAY,CLBIRTHMONTH from VWCLIENTSBIRTHDAY";
	$result=ibase_query($link,$query);

	while ($row=ibase_fetch_object($result))
	{
		$Name1=$row->CL1NAME;
		$Name2=$row->CL2NAME;
		$Sex=$row->CLSEX;		
		$Phone1=$row->CLMOBPHONE1;
		if ($Sex=="муж")
		{
			$sms_text="Уважаемый {$Name1} {$Name2}! ООО ФПК АЛЬТЕРНАТИВА поздравляет вас с днём роджения! Желаем счастья, здоровья и финансового благополучия!";
		}
		if ($Sex=="жен")
		{
			$sms_text="Уважаемая {$Name1} {$Name2}! ООО ФПК АЛЬТЕРНАТИВА поздравляет вас с днём роджения! Желаем счастья, здоровья и финансового благополучия!";
		}
		
		send_sms($Phone1, $sms_text);

	}

	//send_sms
?>
