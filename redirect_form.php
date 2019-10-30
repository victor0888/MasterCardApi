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
<h2>Redirect To Create Checkout Session Request On Submit</h2>
<form action="redirect.php" id="#form" method="post" name="#form">
<label>Gateway Region URL :</label>
  <label>test-gateway.mastercard.com</label>
<input id="url" name="url" value="<?php echo $_POST['url']; ?>" placeholder='test-gateway.mastercard.com' type='text'>
  <label>Gateway API Version :</label>
<label>50</label>
<input id="version" name="version" value="<?php echo $_POST['version']; ?>" placeholder='50' type='text'>
<label>API Username :</label>
  <label>TESTVICTOR01</label>
<input id="username" name="username" value="<?php echo $_POST['username']; ?>" placeholder='Your API Username' type='text'>
<label>API Password :</label>
  <label>cef2d7619cf1535c6b5320ee277a88ed</label>
<input id="password" name="password"  value="<?php echo $_POST['password']; ?>" placeholder='Valid API Password' type='text'>
<label>Currency :</label>
  <label>AUD</label>
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
