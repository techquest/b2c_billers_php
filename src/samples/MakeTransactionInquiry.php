<?php
    namespace Billers\samples;
    use Billers\samples;
    use Billers;
    require_once __DIR__ . '/../../vendor/autoload.php';

    class MakeTransactionInquiry extends BaseSample{
        
        private $key = "";
        public function run($payment_code, $customer_id){
            return $this->billPayment->transaction_inquiry($payment_code, $customer_id);
        }
    }

    //payment code
    const paymentCode = "40201";
    
    //customer of a biller
    const customerId = "07030241757";


    $billers = new MakeTransactionInquiry();

    //make the call
    $response = $billers->run(paymentCode, customerId);

    //echo "\n ".json_encode($response);

    $response_code = json_decode($response["HTTP_CODE"]);
    $response_body = json_decode($response["RESPONSE_BODY"]);

    if($response_code == "200") {

        $transactionRef = $response_body->TransactionRef;

        echo "\n transactionRef ".$transactionRef; 
    }
    
 ?>