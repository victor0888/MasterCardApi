<!DOCTYPE html>
<html>
<head>
<title>Redirect To Create Checkout Session Request On Submit - Demo</title>
<meta content="noindex, nofollow" name="robots">
<link href='redirect_form.css' rel='stylesheet' type='text/css'> <!--== Include CSS File Here ==-->
</head>
<body>
<div class="main">
<div class="first">
<h2>Redirect Form To a Particular Page On Submit using PHP</h2>
<form action="redirect.php" id="#form" method="post" name="#form">
<label>API Username :</label>
  <label>TEST950029025</label>
<input id="username" name="username" value="<?php echo $_POST['username']; ?>" placeholder='Your API Username' type='text'>
<label>API Password :</label>
  <label>5aa689a4ff28a8d62e12a20e77133134</label>
<input id="password" name="password"  value="<?php echo $_POST['password']; ?>" placeholder='Valid API Password' type='text'>
<label>Currency :</label>
  <label>BND</label>
<input id="currency" name="currency" value="<?php echo $_POST['currency']; ?>"placeholder='AUD' type='text'>
<label>OrderId:</label>
<input id="orderid" name="orderid" value="<?php echo $_POST['orderid']; ?>" placeholder='Order ID' type='text' value="">
<label>returnUrl:</label>
<input id="returnUrl" name="returnUrl" value="<?php echo $_POST['returnUrl']; ?>" placeholder='intercation.returnUrl - https://tigris-eden.com/' type='text' value="">
<input id='btn' name="submit" type='submit' value='Submit'>
<!---- Including PHP File Here ---->
</form>
</div>
</div>
</body>
</html>

<span><?php echo $username;?></span> 
