#!/usr/bin/php

<?php
//First of all, get input data
    $in_data = file_get_contents('php://stdin', 'r');

//Get remote addr, which posted request
    $remote_ip = $_SERVER['REMOTE_ADDR'];

//Allow ip addr
    $allow_ip = '192.168.248.35';

//Checking if ipaddr is allow go next or exit
    if($remote_ip == $allow_ip) {
        $obj = new Main($in_data);
    }

//Classes description
    class Main {
        private $xml;
//Primary treatment
        private function __construct($in_data) {
            if($this->xml = new SimpleXMLElement($in_data)) {
                $act = $this->xml->ACT;
                $this->action($act);
            } else
                echo "Incorrect xml data"; // exit;
        }

//Define which request came from
    /**
     * @param $act
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

                    } else
                        echo "Incorrect SIGN"; // exit();

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

