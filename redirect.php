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
<?php echo $username;?><br>
<?php echo $password;?><br>
<?php echo $currency;?><br>
<?php echo $orderid;?><br>
