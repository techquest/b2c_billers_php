<?php
    namespace Billers\samples;
    use Billers\samples;
    use Billers;
    require_once __DIR__ . '/../../vendor/autoload.php';

    class MakePayment extends BaseSample{
        
        private $key = "makepayment";
        public function run($amount, $customerId, $paymentCode){
            return $this->billPayment->make_payment($amount, $customerId, $paymentCode);
        }
    }

    $paymentCode = "40201";

    $customerId = "07030241757";

    $amount = "500"; // amount is in minor format.

    $billers = new MakePayment();

    $response = $billers->run($amount, $customerId, $paymentCode);

    if($response != null) {

        $response_code = json_decode($response["HTTP_CODE"]);
        $response_body = json_decode($response["RESPONSE_BODY"]);

        if($response_code == "200") {
            $transactionRef = $response_body->transactionRef;
            
        }
    }
    
 ?>