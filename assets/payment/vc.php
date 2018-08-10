<html>
<head>
<title>Credit Card Details</title>
<script LANGUAGE="JavaScript" type="text/javascript">
function display() {
  DispWin = window.open('','NewWin', 'toolbar=no,status=,width=500,height=500')
  message = "<ul><li><b>Name: </b>" + document.form1.yourname.value;
  message += "<li><b>Phone Number: </b>" + document.form1.phonenumber.value;
  message += "<li><b>Amount: </b>" + document.form1.amount.value + "</ul>";
  message += "Your payment has been received "+ document.form1.yourname.value + ".Thank you for using our services!!"

	message += "Purchase was succesful!!"
  DispWin.document.write(message);
  
}
</script>
</head>
<body>

<h1><img src="../images/logo2.png" alt="l" width="213" height="122"></h1>
<p><img src="../images/2e1d0-matercard.jpeg" alt="v" width="485" height="179"></p>
<p>&nbsp;</p>
<h1>Card Details</h1>
<form name="form1" action="try5.php">
<p><b>Name:</b> 
  <input TYPE="TEXT" SIZE="20" NAME="yourname">
</p>
<p><b>Card:</b> <input TYPE="TEXT" SIZE="30" NAME="phonenumber">
</p>
<p><b>Amount: </b> <input TYPE="TEXT" SIZE="15" NAME="amount">
</p>
<p><input TYPE="BUTTON" VALUE="Buy" onClick="display();"></p>
</form>
</body>
</html>