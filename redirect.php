 <?php 
$username = "merchant.".$_POST['username'];
$merchant = $_POST['username'];
$password = $_POST['password'];
$currency = $_POST['currency'];
$orderid = $_POST['orderid'];
$curl = curl_init();
//$username = "merchant.TESTVICTESNB237";
//$password = "ed17a6e2ed43172c0f7bde912cbe54de";
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://gateway.test.nab.com.au/api/nvp/version/49",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 100,
  CURLOPT_TIMEOUT => 300,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "apiOperation=CREATE_CHECKOUT_SESSION&merchant=$merchant&apiUsername=$username&apiPassword=$password&order.currency=$currency&order.id=$orderid&order.reference=4523422frt8tii&transaction.reference=3452335ff&order.amount=5&lineOfBusiness=test_socks",
  CURLOPT_HTTPHEADER => array(
  "Authorization: Basic bWVyY2hhbnQuVEVTVFZJQ1RFU05BQjAxOmU5NmYyYjA0YzI4ZGRmN2FhOWZhYjFhYjQ1NGNkNzc1",
    "Content-Type: application/x-www-form-urlencoded",
    "Postman-Token: 0fc6857b-c5c6-44b6-a1d3-d6c987c73399",
    "cache-control: no-cache"
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>
<html>

<body>

Hello <?php echo $username; ?><br>
Hello <?php echo $merchant; ?><br>
Hello <?php echo $password; ?><br>
Hello <?php echo $currency; ?><br>
Hello <?php echo $orderid; ?><br>
</body>

</html>
