
<?php
include "redirect_form.php"
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$username = "merchant".$_POST['username'];
$merchant = $_POST['username'];
$password = $_POST['password'];
$currency = $_POST['currency'];
$orderid = $_POST['orderid'];
echo $username;
echo $merchant;
echo $password;
echo $currency;
echo $orderid; 
}
?>
