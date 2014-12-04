<?php
/**
 * User: adm
 * Date: 03.12.2014
 * Time: 12:45
 */

class CheckContract{
    /**
     * @method string __construct()  Проверяет валидность контракта
     * @param $contract Номер договора
     */
    function __construct($contract) {
        $dbc = new DbConnection();
        if($dbc) {
            $stmt = $dbc->query("SELECT contract from get_contract_24nonstop WHERE contract = '%s'", $dbc->real_escape_string($contract));
            $row = $dbc->fetch_assoc($stmt);
            if(isset($row))
                return $row;
            else
                return false;
        } else
            return false;
    }
}