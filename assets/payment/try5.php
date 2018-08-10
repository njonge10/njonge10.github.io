<?php

define('DB_NAME', 'cellphone');
define('DB_USER', 'root');
define('DB_PASSWORD' '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
	}
	
$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Cant use ' . DB_NAME . ' : ' . mysql_error());
	}
	
	echo 'Purchase successful'
	
$value = $_POST['name'];
$value1 = $_POST['card'];
$value2 = $_POST['amount'];

$sql = "INSERT INTO buyv (name, card, amount) VALUES ('$value', '$value1', '$value2')";

if (mysql_query($sql)) {
	die('Error: ' . mysql_error());
	}
	
mysql_close();

?>