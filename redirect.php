 <?php 
include '_bootstrap.php';
$username = "merchant.".$_POST['username'];
$merchant = $_POST['username'];
$password = $_POST['password'];
$currency = $_POST['currency'];
$orderid = $_POST['orderid'];
$returnUrl = $_POST['returnUrl'];
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://baiduri-bpgs.mtf.gateway.mastercard.com/api/nvp/version/46",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 100,
  CURLOPT_TIMEOUT => 300,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "apiOperation=CREATE_CHECKOUT_SESSION&merchant=$merchant&apiUsername=$username&apiPassword=$password&order.currency=$currency&order.id=$orderid&order.amount=45",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Basic bWVyY2hhbnQuVEVTVFZJQ1RFU05BQjAxOmU5NmYyYjA0YzI4ZGRmN2FhOWZhYjFhYjQ1NGNkNzc1",
    "Content-Type: application/x-www-form-urlencoded",
    "Postman-Token: 0fc6857b-c5c6-44b6-a1d3-d6c987c73399",
    "cache-control: no-cache"
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
 parse_str($response);
 session_start();
$newmwerchant = $merchant;
$result = $result;
$sessionid = $session_id;
$sessionstatus =  $session_updateStatus;
$sessionversion =  $session_version;
$successindicator = $successIndicator;
$_SESSION['newmwerchant'];

}
?>
<!DOCTYPE html>
<html>
 <head>
<meta content="noindex, nofollow" name="robots">
<link href='redirect_form.css' rel='stylesheet' type='text/css'> <!--== Include CSS File Here ==-->
</head>
<body>
<br><br>
Hello <?php echo $newmwerchant; ?><br>
Hello <?php echo $result; ?><br>
Hello <?php echo $sessionid; ?><br>
Hello <?php echo $sessionstatus; ?><br>
Hello <?php echo $sessionversion; ?><br>
Hello <?php echo $successindicator; ?><br><br>
<form action="hosted_checkout_mastercard.php" id="#form" method="post" name="#form">
<label>Merchant :</label>
<input id="merchant" name="merchant" value="<?php echo $_POST['newmwerchant']; ?>" type='text'>
<label>Sessionid :</label>
<input id="sessionid" name="sessionid"  value="<?php echo $_POST['sessionid']; ?>" type='text'>
<label>SessionVersion :</label>
<input id="sessionversion" name="sessionversion" value="<?php echo $_POST['sessionversion']; ?>" type='text'>
<label>SuccessIndicator:</label>
<input id="successindicator" name="successindicator" value="<?php echo $_POST['successindicator']; ?>"  type='text' value="">
<label>OrderId:</label>
<input id="orderid" name="orderid" value="<?php echo $_POST['orderid']; ?>" type='text' value="">
<input id='btn' name="submit" type='submit' value='Submit'>
</body>

</html>
