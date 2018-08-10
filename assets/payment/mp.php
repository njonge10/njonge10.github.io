<html>
<head>
<title>Mpesa Details</title>
<script LANGUAGE="JavaScript" type="text/javascript">
function display() {
  DispWin = window.open('','NewWin', 'toolbar=no,status=,width=500,height=500')
  message = "<ul><li><b>Name: </b>" + document.form1.yourname.value;
  message += "<li><b>Phone Number: </b>" + document.form1.phonenumber.value;
  message += "<li><b>Amount: </b>" + document.form1.amount.value + "</ul>";
  message += "Your payment has been received "+ document.form1.yourname.value + ".Thank you for using our services!!"

	message += "Purchase was succesful!!!>"
  DispWin.document.write(message);
  
}
</script>
</head>
<body>
<h1><img src="file:///C|/wamp/www/Cellphone/assets/logo2.png" width="213" height="122" alt="g"></h1>
<p><img src="file:///C|/wamp/www/Cellphone/assets/M-PESA.jpg" width="371" height="186" alt="m"></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h1>Mpesa Details</h1>
<form name="form1" action="try3.php">
<p><b>Name:</b> 
  <input TYPE="TEXT" SIZE="20" NAME="yourname">
</p>
<p><b>Phone Number:</b> <input TYPE="TEXT" SIZE="30" NAME="phonenumber">
</p>
<p><b>Amount: </b> <input TYPE="TEXT" SIZE="15" NAME="amount">
</p>
<p><input TYPE="BUTTON" VALUE="Buy" onClick="display();"></p>
</form>
</body>
</html>