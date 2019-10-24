<?php
/*
 * Copyright (c) 2016 Mastercard
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
include '_bootstrap.php';
session_start();
$newmwerchantH = $_SESSION['newmwerchant'];
$resultH = $_SESSION['newmwerchant'];
$sessionidH = $_SESSION['sessionid'];
$sessionstatusH =  $_SESSION['sessionstatus'];
$sessionversionH =  $_SESSION['sesionversion'];
$successindicatorH = $_SESSION['successindicator'];
$orderidH = $_SESSION['orderid'];
?>
<!DOTYPE html>
<html> 
<!--"https://test-gateway.mastercard.com/checkout/version/47/checkout.js"--> 
<head> 
<script type="text/javascript"> 
    var sessionId = "<?= json_encode($sessionidH); ?>";
    var sessionVersion = "<?= json_encode($sessionversionH); ?>";
    var successIndicator = "<?= json_encode($successindicatorH); ?>";
    var orderId = "<?= json_encode($orderidH);  ?>";
    var resultIndicator = null;
</script> 
</head> 
<body> 
... Master card: 5123450000000008<br>
More test cards: <a href="https://baiduri-bpgs.mtf.gateway.mastercard.com/api/documentation/integrationGuidelines/supportedFeatures/testAndGoLive.html?locale=en_US" target="_blank">Click here<a/><br>
China Union Pay: 
<a href="https://baiduri-bpgs.mtf.gateway.mastercard.com/api/documentation/integrationGuidelines/supportedFeatures/pickPaymentMethod/browserPayments/testDetails.html?locale=en_US#x_SecurePayTest" target="_blank">Click for test cards<a/><br>

<p id="demo">
	<br><br>
Hello <?php echo $newmwerchantH; ?><br>
Hello <?php echo $resultH; ?><br>
Hello <?php echo $sessionidH; ?><br>
Hello <?php echo $sessionstatusH; ?><br>
Hello <?php echo $sessionversionH; ?><br>
Hello <?php echo $successindicatorH; ?><br>
	</p> 

<p id="demo2">
<script type="text/javascript">
document.write(sessionId);
</script>
	</p> 
</body> 
</html> 

