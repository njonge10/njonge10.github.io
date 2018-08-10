<title>Credit Card Details</title><h1>Card Details</h1>
 <form action="try5.php" method="get">
<!-- Method can be set as POST for hiding values in URL-->

<label>Name:</label>
<input class="input" name="name" type="text" value="<?php echo $_POST['name']; ?>">
<label><br>
<br>
Card:</label>
<input class="input" name="contact" type="text" value="<?php echo $_POST['card']; ?>">
<label><br>
<br>
Amount:</label>
<input class="input" name="amount" type="text" value="<?php echo $_POST['amount']; ?>">

<input class="submit" name="submit" type="submit" value="Buy">
</form>