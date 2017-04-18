<?php
    namespace Billers\samples;
    use Billers\samples;
    use Billers;
    require_once __DIR__ . '/../../vendor/autoload.php';

    class GetBillers extends BaseSample{
        
        public function run(){
            return $this->billPayment->get_billers();
        }
    }


    //////// 
    //////////////////////////////////////////////////////////////////////////////////////////////////

    $get_billers = new GetBillers();

    $response = $get_billers->run();

    if($response != null) {

        $response_code = json_decode($response["HTTP_CODE"]);
        $response_body = json_decode($response["RESPONSE_BODY"]);

        $biller_array = $response_body->billers;

        $first_biller = $response_body->billers[0];
        
        $biller_id = $first_biller->billerid;
        $biller_name = $first_biller->billername;
        
        echo $biller_id." ".$biller_name;
//////////////////////////////////////////////////////////////////////////////////////////////////
    }
 ?>