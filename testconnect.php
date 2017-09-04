<?php
	define('DB_NAME','afpc1');
	define('DB_PATH','localhost');
	define('DB_USER','admin');
	define('DB_PASS','afpc2006');
$link=mysqli_connect(DB_PATH,DB_USER,DB_PASS,DB_NAME);
if($link)
echo 'Соединение установлено.';
else
die('Ошибка подключения к серверу баз данных.');
/*
$database = 'afpc1';
$selected = mysql_select_db($database, $dblink);
if($selected)
echo ' Подключение к базе данных прошло успешно.';
else
die(' База данных не найдена или отсутствует доступ.');*/
?>
