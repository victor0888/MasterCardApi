<?php
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$username = "merchant".$_POST['username'];
$merchant = $_POST['username'];
$password = $_POST['password'];
$currency = $_POST['currency'];
$orderid = $_POST['orderid'];
if($username !=''&& $password !=''&& $currency !=''&& $orderid !='')
{
//  To redirect form on a particular page
header("Location:https://victor-test-app123.herokuapp.com/redirect.php"); 
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
?>


<?php
echo $username;
echo $merchant;
echo $password;
echo $currency;
echo $orderid; 
$curl = curl_init();
//$username = "merchant.TESTVICTESNB237";
//$password = "ed17a6e2ed43172c0f7bde912cbe54de";
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://gateway.test.nab.com.au/api/nvp/version/49",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "apiOperation=CREATE_CHECKOUT_SESSION&merchant=$merchant&apiUsername=$username&apiPassword=$password&order.currency=$AUD&order.id=546098tr8834&order.reference=4523422frt8tii&transaction.reference=3452335ff&order.amount=5&interaction.returnUrl=https%3A%2F%2Ftigris-eden.com%2F&lineOfBusiness=test_socks",
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
?>
