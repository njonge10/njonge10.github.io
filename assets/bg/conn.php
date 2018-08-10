<?php

$host='localhost';
$user='root';
$pass='';
$db='cellphone';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
	echo'connected successfully to cellphone database';
	
$sql="insert into buy (phone,price) values('Samsung Galaxy Note 7',50000);
$query=mysqli_query($con,$sql);
if($query)
	echo'data inserted successfully';
?>