<?php

define('DB_NAME', 'cellshop');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
	}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Cant use ' . DB_NAME . ' : ' . mysql_error());
	}
	
echo 'Connected successfully';

	if (isset($_POST['model'])){
		$model = $_POST['model'];}
	if (isset($_POST['price'])){
		$price = $_POST['price'];}

$sql = "INSERT INTO stock(model,price) VALUES ('$model' ,'$price')";
 

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
	}
	mysql_close();
	
?>
