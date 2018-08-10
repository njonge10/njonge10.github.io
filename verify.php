<?php
require_once 'config.php';
require_once 'database.php';

 
  
  $userName = $_POST['username'];
  $password = $_POST['password'];
  
 
 
    // check the database and see if the username and password combo do match
    $sql = "SELECT id, username
            FROM login 
        WHERE username = '$userName' AND password = '$password'";
    $result = dbQuery($sql);
  
    if (dbNumRows($result) == 1) {
		echo "1";
		
      $row = dbFetchAssoc($result);
      $_SESSION['asset_user_id'] = $row['id'];
      $_SESSION['asset_user_name'] = $row['username'];
      
	
     
     
    } 
    else {
      echo "0";
	  $_SESSION['asset_user_name'] = "Enter username";
      }   
      
  
  

?>
