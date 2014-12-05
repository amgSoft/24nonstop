<?php
/**
 * Main  class
 * User: adm
 * Date: 03.12.2014
 * Time: 15:50
 */

class Main {
    private $xml;
//Primary constructor
    private function __construct($in_data) {
        if($this->xml = new SimpleXMLElement($in_data)) {
            $act = $this->xml->act;
            $this->action($act);
        } else
            echo "Incorrect xml data"; // exit;
    }

    /**
     * @method string action() Define which request came from
     */
    private function action($act) {
        switch($act) {
//It's checking opportunity to make payment and show info by client
            case '1':
                $service_id = $this->xml->service_id;
                $pay_account = $this->xml->pay_account;
                $pay_id = $this->xml->pay_id;

                $sign = $this->xml->sign;

                $signForSimile = sha1($act+"_"+$pay_account+"_"+$service_id+"_"+$pay_id+"_"+SECRET);

                if($sign == $signForSimile) {
                    $contract = new GetInfo($pay_account);
                    if(isset($contract)) {

                    }
                } else {
                    echo "Incorrect SIGN"; // exit();
                }

                break;
//request to make payment
            case '4':

                break;
//It's checking the status of the payment
            case '7':

                break;
//Default condition
            default:
                echo "Incorrect xml data";
                exit;
        }
    }
}