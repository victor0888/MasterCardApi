<?php
 
require_once("./lib/Simplify.php");
 
Simplify::$publicKey = 'sbpb_ZWEwZjNmMzYtYjhhNy00MTY3LThlNTYtY2YwNmYyYTliYTc3';
Simplify::$privateKey = 'prI0mEBb0iKCGmNUcjQlPS0lofZd+5ax/850JRsYBwB5YFFQL0ODSXAOkNtXTToq';
 
$cardToken = Simplify_CardToken::createCardToken(array(
        'card' => array(
           'addressState' => 'MO',
           'expMonth' => '11',
           'expYear' => '99',
           'addressCity' => 'OFallon',
           'cvc' => '123',
           'number' => '5105105105105100',
           'secure3DRequestData': => array(
               'amount': 1000,
               'currency': 'USD',
               'description': 'description'
           )
        )
));
 
print_r($cardToken);
 
?>
