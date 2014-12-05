<?php
/**
 * Config file for 24nonstop
 * User: adm
 * Date: 02.12.2014
 * Time: 14:48
 */

define("DB_HOST", "localhost");
define("DB_NAME", "my_db");
define("DB_USER", "my_user");
define("DB_PASS", "some_pass");

define("SECRET", "some_secret");

/**
 * @method __autoload() Загрузка файла класса при инициализации обьекта
 * @param $class_name Название класса
 */
function __autoload($class_name) {
    include_once("../libs/" . $class_name . ".php" );
}
