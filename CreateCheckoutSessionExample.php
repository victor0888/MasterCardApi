<?php


$curl = curl_init();
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
if($name !=''&& $email !=''&& $contact !=''&& $address !='')
{
//  To redirect form on a particular page
header("Location:https://victor-test-app123.herokuapp.com/CreateCheckoutSessionExample.php");
}
else{
?><span><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
?>
$username = "merchant.TESTVICTESNB237";
$password = "ed17a6e2ed43172c0f7bde912cbe54de";
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://gateway.test.nab.com.au/api/nvp/version/49",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "apiOperation=CREATE_CHECKOUT_SESSION&merchant=TESTVICTESNB237&apiUsername=merchant.TESTVICTESNB237&apiPassword=ed17a6e2ed43172c0f7bde912cbe54de&order.currency=AUD&order.id=546098tr8834&order.reference=45234224rt8tii&transaction.reference=3452345p6fg5ff&order.amount=5&interaction.returnUrl=https%3A%2F%2Ftigris-eden.com%2F&lineOfBusiness=test_socks",
  CURLOPT_HTTPHEADER => array(
'Authorization: Basic ' . base64_encode("$username:$password"))
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  parse_str($response);
echo "<br>".$merchant."<br>";
echo $result."<br>";
echo $session_id."<br>";
echo $session_updateStatus."<br>";
echo $session_updateStatus."<br>";
echo $session_version;
?>
}
