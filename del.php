<?php

define('DB_NAME', 'cellshop');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
	}
	
$db_selected = mysql_select_db(DB_NAME, $link);

if(!$db_selected) {
	die('Cant use ' . DB_NAME . ' : ' . mysql_error());
	
	
$sql = "DELETE FROM payments WHERE name = " .$name;
if ($link->query($sql) === TRUE){
		echo "Record deleted successfully";
		}else{
		echo "Error deleting record: ".$conn->error;
		}		
		mysql_close();
		
		
		
?>