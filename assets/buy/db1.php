<?php
 
//Sample Database Connection Script 
 
//Setup connection variables, such as database username
//and password
$hostname="localhost";
$username="username";
$password="root";
$dbname="cellphone";
$usertable="customers";
$yourfield = "your_field";
 
//Connect to the database
$connection = mysql_connect($localhost, $cellphone, $root);
mysql_select_db($cellphone, $connection);
 
//Setup our query
$query = "SELECT * FROM $customers";
 
//Run the Query
$result = mysql_query($query);
 
//If the query returned results, loop through
// each result
if($result)
{
  while($row = mysql_fetch_array($result))
  {
    $first_name = $first_name["$first_name"];
	$last_name = $last_name["$last_name"];
	$email = $email["$email"];
	$phone = $phone["$phone"];
    echo "Name: " . $first_name,$last_name; 
	echo "Email: " . $email;
	echo "Tel. No: " . $phone;   
  }
}
 
