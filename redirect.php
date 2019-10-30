 <?php 
session_start(); # read up on session.auto_start
$url = $_POST['url'];
$version = $_POST['version'];
$operation = $_POST['operation'];
$username = "merchant.".$_POST['username'];
$merchant = $_POST['username'];
$password = $_POST['password'];
$currency = $_POST['currency'];
$orderid = $_POST['orderid'];
$returnUrl = $_POST['returnUrl'];
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://$url/api/nvp/version/$version",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 100,
  CURLOPT_TIMEOUT => 300,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "apiOperation=CREATE_CHECKOUT_SESSION&merchant=$merchant&apiUsername=$username&apiPassword=$password&order.currency=$currency&interaction.operation=$operation&order.id=$orderid&order.amount=45",
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
 $_SESSION["a"] = 17;
$_SESSION["orderid"] = $orderid;
$_SESSION["newmwerchant"] = $merchant;
$_SESSION["result"] = $result;
$_SESSION["sessionid"] = $session_id;
$_SESSION["sessionstatus"] =  $session_updateStatus;
$_SESSION["sessionversion"] =  $session_version;
$_SESSION["successindicator"] = $successIndicator;

}
?>
<!DOCTYPE html>
<html>
 <head>
<meta content="noindex, nofollow" name="robots">
</head>
<body>
<br><br>
Hello <?php echo $_SESSION["a"];?><br>
Hello <?php echo $_SESSION["orderid"];?><br>
Hello <?php echo $_SESSION["newmwerchant"]; ?><br>
Hello <?php echo $_SESSION["result"]; ?><br>
Hello <?php echo $_SESSION["sessionid"]; ?><br>
Hello <?php echo $_SESSION["sessionstatus"]; ?><br>
Hello <?php echo $_SESSION["sessionversion"]; ?><br>
Hello <?php echo $_SESSION["successindicator"]; ?><br><br>
 	<a href="hosted_checkout_mastercard.php">Click Here to proceed!</a>
</body>
 <?php


 ?>
</html>
