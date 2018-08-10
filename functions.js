function check(form)/*function to check userid & password*/
{
  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var email = $('#email').val();
    var password = $('#password').val();
     var name = $('#name').val();
    var username = $('#username').val();
     var contact = $('#contact').val();
    
    
    if(email == ''){
        $('#error').html('<div class="alert alert-danger">Please enter your email address</div>');
        $('#email').focus();
    }
    else if(reg.test(email) == false){
        $('#error').html('<div class="alert alert-danger">Please enter a valid email address</div>');
        $('#email').focus();
    }
    else if(password == ''){
        $('#error').html('<div class="alert alert-danger">Please enter password</div>');
        $('#password').focus();
    }  else if(contact == ''){
        $('#error').html('<div class="alert alert-danger">Please enter your contacts</div>');
        $('#contact').focus();
    }  else if(name == ''){
        $('#error').html('<div class="alert alert-danger">Please enter your name</div>');
        $('#name').focus();
    }else {
      var dataString = 'email=' + email + '&password=' + password + '&name=' + name + '&username=' + username + '&contact=' + contact;
        $.ajax({
            type: 'POST',
            url: "try2.php",
            data: dataString,
            cache: false,
            
            beforeSend: function() {
                $("#error").html('<div class="alert alert-info" style="text-align:center;font-family:Verdana, Geneva, sans-serif; font-size:12px; font-weight:bolder;">Authenticating...</font>&nbsp <img src="img/load.gif" alt="Authenticating..." title="Authenticating..."/></div>');
            },
            success: function(response) {
                var loginResult=response.indexOf('operation_process_is_completed=yes');
                if (loginResult != -1)  {
                    window.location.replace(response);
                }
                else 
                {
                    $("#error").html(response).fadeIn(2000);
                }
            }
        });
    }
}