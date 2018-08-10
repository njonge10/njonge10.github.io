<?php
$username = "root";
$password="";
$host="localhost";
$database="cellphone";

	//$Name=$_POST['name'];
	//$Card=$_POST['card'];
	//$Amount=$_POST['amount'];
mysql_connect($host, $username, $password);
mysql_elect_db($database);
$sql = "SELECT * FROM buyv WHERE Username_name='$Username'";
$result = mysql_query($sql) or die (mysql_error());
while ($row = mysql_fetch array ($result)) {
$Name=$row['name'];
$Card=$row['card'];
$Amount=$row['amount'];
}
?>