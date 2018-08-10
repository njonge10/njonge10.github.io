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
	
echo 'Login Successful!!! Welcome!!!<br>';
if (isset($_POST['name'])){
	$value = $_POST['name'];}
	echo "Name: ".$value;
if (isset($_POST['email'])){
	$value1 = $_POST['email'];}
	echo "<br>Email: ".$value1;
if (isset($_POST['contact'])){
	$value2 = $_POST['contact'];}
	echo "<br>Phone No: ".$value2;
if (isset($_POST['username'])){
	$username = $_POST['username'];}
	echo "<br>Username: ".$username;
if (isset($_POST['password'])){
	$password = $_POST['password'];}
	

$sql = "INSERT INTO login (name, email, contact,username,password) VALUES ('$value' ,'$value1', '$value2','$username', '$password')";
 

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
	}
	
	
	
	mysql_close();
	
?>

<p><a href="buy.html" target="_parent">Click here to proceed</a>
</p>
