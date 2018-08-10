<?php

function check()/*function to check userid & password*/
{
  var re = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  var $email = $('form input[name="email');
    if (isEmpty(name, 'Enter user name')) {
      return;
    } else if (isEmpty(contact, 'Enter contact')) {
      return;
    } else if (isEmpty(email, 'Enter Email')) {
      return;
    } else if ($email.val() == '' || !re.test($txtEmail.val()))
      {
          alert('Please enter a valid email address.');
          return false;
    } else if (isEmpty(username, 'Enter username')) {
      return;
    } else if (isEmpty(password, 'Enter password')) {
      return;
    }else {
      submit();
    }
}


?>