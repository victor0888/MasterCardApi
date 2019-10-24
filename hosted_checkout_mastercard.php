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

# I am file2.php
session_start(); # read up on session.auto_start

?>
<!DOTYPE html>
<html> 
<!--"https://test-gateway.mastercard.com/checkout/version/47/checkout.js"--> 
<head> 
<script type="text/javascript"> 
    var sessionId = "<?= $_SESSION["sessionid"]; ?>";
    var sessionVersion = "<?= $_SESSION["sessionversion"]; ?>";
    var successIndicator = "<?= $_SESSION["successindicator"]; ?>";
    var orderId = "<?= $_SESSION["orderid"]; ?>";
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
Hello <?php echo $_SESSION["a"];?><br>
Hello <?php echo $_SESSION["orderid"];?><br>
Hello <?php echo $_SESSION["newmwerchant"]; ?><br>
Hello <?php echo $_SESSION["result"]; ?><br>
Hello <?php echo $_SESSION["sessionid"]; ?><br>
Hello <?php echo $_SESSION["sessionstatus"]; ?><br>
Hello <?php echo $_SESSION["sessionversion"]; ?><br>
Hello <?php echo $_SESSION["successindicator"]; ?><br><br>
	</p> 

<p id="demo2">
<script type="text/javascript">
document.write(sessionId);
</script>
	</p> 
</body> 
</html> 

