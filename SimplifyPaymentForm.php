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
?>
<!DOTYPE html>
<html> 
<head> 
</head>
<body> 
<h1>Charge $10 with Simplify Commerce</h1>
<h2>Please go the the below link to get Simplify Test Card.</h2>
<a href="https://commbank.simplify.com/commerce/docs/testing/test-card-numbers" target="_blank">Click here<a/><br>
<form id="simplify-payment-form" action="" method="POST">
    <!-- The $10 amount is set on the server side -->
    <div>
        <label>Credit Card Number: </label>
        <input id="cc-number" type="text" maxlength="20" autocomplete="off" value="" autofocus />
    </div><br>
    <div>
        <label>CVC: </label>
        <input id="cc-cvc" type="text" maxlength="4" autocomplete="off" value=""/><br>
    </div>
    <div>
        <label>Expiry Date: </label>
        <select id="cc-exp-month">
            <option value="01">Jan</option>
            <option value="02">Feb</option>
            <option value="03">Mar</option>
            <option value="04">Apr</option>
            <option value="05">May</option>
            <option value="06">Jun</option>
            <option value="07">Jul</option>
            <option value="08">Aug</option>
            <option value="09">Sep</option>
            <option value="10">Oct</option>
            <option value="11">Nov</option>
            <option value="12">Dec</option>
        </select>
        <select id="cc-exp-year">
            <option value="15">2015</option>
            <option value="16">2016</option>
            <option value="17">2017</option>
            <option value="18">2018</option>
            <option value="19">2019</option>
            <option value="20">2020</option>
            <option value="21">2021</option>
            <option value="22">2022</option>
            <option value="23">2023</option>
            <option value="24">2024</option>
        </select>
    </div><br>
    <button id="process-payment-btn" type="submit">Process Payment</button>
</form>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="https://www.simplify.com/commerce/v1/simplify.js"></script>
<script type="text/javascript">
    function simplifyResponseHandler(data) {
        var $paymentForm = $("#simplify-payment-form");
        // Remove all previous errors
        $(".error").remove();
        // Check for errors
        if (data.error) {
            // Show any validation errors
            if (data.error.code == "validation") {
                var fieldErrors = data.error.fieldErrors,
                        fieldErrorsLength = fieldErrors.length,
                        errorList = "";
                for (var i = 0; i < fieldErrorsLength; i++) {
                    errorList += "<div class='error'>Field: '" + fieldErrors[i].field +
                            "' is invalid - " + fieldErrors[i].message + "</div>";
                }
                // Display the errors
                $paymentForm.after(errorList);
            }
            // Re-enable the submit button
            $("#process-payment-btn").removeAttr("disabled");
        } else {
            // The token contains id, last4, and card type
            var token = data["id"];
            // Insert the token into the form so it gets submitted to the server
            $paymentForm.append("<input type='hidden' name='simplifyToken' value='" + token + "' />");
            // Submit the form to the server
            $paymentForm.get(0).submit();
        }
    }
    $(document).ready(function() {
        $("#simplify-payment-form").on("submit", function() {
            // Disable the submit button
            $("#process-payment-btn").attr("disabled", "disabled");
            // Generate a card token & handle the response
            SimplifyCommerce.generateToken({
                key: "sbpb_NGUzNDA0MmUtYTdhOS00NDA1LWI3NTUtNTA0YzRiMmY1OTNl",
                card: {
                    number: $("#cc-number").val(),
                    cvc: $("#cc-cvc").val(),
                    expMonth: $("#cc-exp-month").val(),
                    expYear: $("#cc-exp-year").val()
                }
            }, simplifyResponseHandler);
            // Prevent the form from submitting
            return true;
        });
    });
</script>
</body> 
</html> 
