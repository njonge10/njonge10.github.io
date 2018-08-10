<p><img src="assets/logo2.png" width="213" height="122" alt="logo" /></p>
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
	
echo 'Feedback received.Thank you!!';
if (isset($_POST['name'])){
	$value = $_POST['name'];}
	
if (isset($_POST['email'])){
	$value1 = $_POST['email'];}
	
if (isset($_POST['comment'])){
	$value2 = $_POST['comment'];}
	
$sql = "INSERT INTO admin(name, email, comment) VALUES ('$value' ,'$value1', '$value2')";

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
	}
	
	mysql_close();
	
?>
<br/>
<br/>
<a href="index.html" target="_parent">Back</a>