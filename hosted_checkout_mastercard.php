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
include 'redirect.php';

?>
<!DOTYPE html>
<html> 
<!--"https://test-gateway.mastercard.com/checkout/version/47/checkout.js"--> 
<head> 
<script type="text/javascript"> 
    var sessionId = "<?php echo $sessionid; ?>";
    var sessionVersion = "<?php echo $sessionversion; ?>";
    var successIndicator = "<?php echo $successindicator; ?>";
    var orderId = "<?= json_encode($orderid);  ?>";
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
Hello <?php echo $newmwerchant; ?><br>
Hello <?php echo $result; ?><br>
Hello <?php echo $sessionid; ?><br>
Hello <?php echo $sessionstatus; ?><br>
Hello <?php echo $sessionversion; ?><br>
Hello <?php echo $successindicator; ?><br><br>
	</p> 

<p id="demo2">
<script type="text/javascript">
document.write(sessionId);
</script>
	</p> 
</body> 
</html> 

