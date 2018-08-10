<html>

<style type="text/css">
<!--
.style2 {
	font-size: xx-large;
	color: #FF0000;
}
body{background-color: #808080;}
-->
</style>
<body>
<h1><img src="assets/images/logo2.png" alt="logo" width="213" height="122"></h1>
 <td><span class="style2">Transaction Details</span></td>
</body>
<script>
function myFunction() {
    window.print();
}
</script>
</html>
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
	
echo '<br>Purchase Successful!!! <br>';
 echo 'Transaction ID: '.uniqid();
	if (isset($_POST['name'])){
		$name = $_POST['name'];}
		echo "<br>Name: ".$name;
	if (isset($_POST['phone'])){
		$phone = $_POST['phone'];}
		echo "<br>Phone Model: ".$phone;
	if (isset($_POST['amount'])){
		$amount = $_POST['amount'];}
		echo "<br>Amount paid Ksh: ".$amount;
 
$sql = "INSERT INTO payments(name,phone,amount) VALUES ('$name','$phone','$amount')";

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
	}
	
	mysql_close();
	

	echo '<br><br><br><br><br>Transaction Complete!!! Thank you. <br>';
?>

<br/>
<br/>
<br/>
<a class="btn btn-success" href="index.html">Go to home</a>
<button onclick="myFunction()">Print</button>

