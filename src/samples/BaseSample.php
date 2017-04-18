<?php
    namespace Billers\samples;
    use Billers\BillPayment;
    use Interswitch\Interswitch;
    require_once __DIR__ . '/../../vendor/autoload.php';

    class BaseSample{
        
        var $clientId = "IKIA2EFBE1EF63D1BBE2AF6E59100B98E1D3043F477A";
        var $clientSecret="uAk0Amg6NQwQPcnb9BTJzxvMS6Vz22octQglQ1rfrMA=";
        var $billPayment;

        public function __construct(){
            $this->billPayment = new BillPayment($this->clientId, $this->clientSecret, Interswitch::ENV_DEV);
        }
    }
?>