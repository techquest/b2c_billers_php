<?php
    namespace Billers;
    use Interswitch\Interswitch;
    use Billers\constants;
    require_once __DIR__ . '/../vendor/autoload.php';
    
    class BillPayment{

        private $interswitch;
        public function __construct($clientId, $clientSecret, $env="SANDBOX"){
            $this->interswitch = new Interswitch($clientId, $clientSecret,$env);
        }
        public function get_billers(){
            echo "get billers function\n";
            try {
                return $this->interswitch->send(Constants::GET_BILLERS_URL, Constants::GET);
            }
            catch(Exception $e){
                return null;
            }
        }
        public function get($key){//generic get
            
            try{
                //echo Constants::MAP[$key];
                return $this->interswitch->send(Constants::MAP[$key], Constants::GET);
            }
            catch(Exception $e) {
                return null;
            }
        }
        public function get_category_billers($id){

            try{

                $prefixURL = Constants::GET_CATEGORYS_BILLERS_PREFIX;
                $suffixURL = Constants::GET_CATEGORYS_BILLERS_SUFFIX;

                return $this->interswitch->send($prefixURL.$id.$suffixURL, Constants::GET);

            }
            catch(Exception $e){
                return null;
            }
        }
    }
?>