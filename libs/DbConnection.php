<?php
/**
 * User: adm
 * Date: 03.12.2014
 * Time: 13:33
 */

/**
 * @method dbConnection Функция соединения с БД
 * @return bool
 */
class DbConnection {
    public function __construct() {
        $dbc = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if($dbc->errno) {
            return false;
        } else {
            $dbc->query("SET NAMES utf8");
            return $dbc;
        }
    }
}
