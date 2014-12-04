#!/usr/bin/php

<?php
// Including config file
include_once("conf/conf.php");

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


