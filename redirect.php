 <?php 
$username = "merchant.".$_POST['username'];
$merchant = $_POST['username'];
$password = $_POST['password'];
$currency = $_POST['currency'];
$orderid = $_POST['orderid'];

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
