<?php
/**
 * Checking pay_id for input request
 * @return bool Return true if pay_id not found or false if pay_id is
 * User: adm
 * Date: 05.12.2014
 * Time: 11:35
 */

class CheckPayId {
    function __construct($pay_id) {
        $dbc = new DbConnection();

        if($dbc) {
            $stmt = $dbc->query("SELECT pay_id from check_pay_id_24nonstop WHERE pay_id = '%s'", $dbc->real_escape_string($pay_id));
            $row = $dbc->fetch_assoc($stmt);

            $stmt->close();
            $dbc->close();

            if(isset($row))
                return false;
            else
                return true;
        } else
            return false;
    }
}