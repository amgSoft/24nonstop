<?php
/**
 * @method {string} CheckContract()
 * @param {string} $contract
 * @return {bool} True if contract found or false if not
 * User: adm
 * Date: 03.12.2014
 * Time: 12:45
 */

class GetInfo{
    /**
     *@param string $contract  Номер договору
     */
    function __construct($contract) {
        $dbc = new DbConnection();
        if($dbc) {
            $stmt = $dbc->query("SELECT contract from get_info_24nonstop WHERE contract = '%s'", $dbc->real_escape_string($contract));
            $row = $dbc->fetch_assoc($stmt);
            $stmt->close();
            $dbc->close();

            return $row;
        } else
            return false;
    }
}