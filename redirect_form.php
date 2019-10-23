<!DOCTYPE html>
<html>
<head>
<title>Redirect Form To a Particular Page On Submit - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<link href='redirect_form.css' rel='stylesheet' type='text/css'> <!--== Include CSS File Here ==-->
</head>
<body>
<div class="main">
<div class="first">
<h2>Redirect Form To a Particular Page On Submit using PHP</h2>
<form action="CreateCheckoutSessionExample.php" id="#form" method="post" name="#form">
<label>API Username :</label>
<input id="username" name="username" placeholder='Your API Username' type='text'>
<label>API Password :</label>
<input id="password" name="password" placeholder='Valid API Password' type='text'>
<label>Currency :</label>
<input id="currency" name="currency" placeholder='AUD' type='text'>
<label>OrderId:</label>
<input id="orderid" name="orderid" placeholder='Order ID' type='text' value="">
<input id='btn' name="submit" type='submit' value='Submit'>
<!---- Including PHP File Here ---->
 <?php include "CreateCheckoutSessionExample.php";?>
</form>
</div>
</div>
</body>
</html>
