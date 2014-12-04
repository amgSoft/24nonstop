<?php
/**
 * Config file for 24nonstop
 * User: adm
 * Date: 02.12.2014
 * Time: 14:48
 */

define("DB_HOST", "localhost");
define("DB_NAME", "UTM5");
define("DB_USER", "24nonstop");
define("DB_PASS", "24nonstop_pass");

define("SECRET", "F454FR43DE3224NONSTOP");

/**
 * @method __autoload() Загрузка файла класса при инициализации обьекта
 * @param $class_name Название класса
 */
function __autoload($class_name) {
    include_once("../libs/" . $class_name . ".php" );
}