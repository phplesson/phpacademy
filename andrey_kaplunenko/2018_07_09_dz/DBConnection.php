<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 7/10/18
 * Time: 3:38 PM
 */

require_once './Configuration.php';

class DBConnection extends mysqli {
    private static $instance = null;

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct() {
        $Object = Configuration::getInstance();

        $host=$Object->getValue('server');
        $user=$Object->getValue('username');
        $password=$Object->getValue('password');
        $dbname=$Object->getValue('db');

        parent::__construct($host, $user, $password, $dbname);
    }

    private function __clone() {}
    private function __wakeup(){}
}

//$DBConnect = DBConnection::getInstance();
//var_dump($DBConnect);