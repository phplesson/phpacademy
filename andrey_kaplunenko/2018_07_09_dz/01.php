<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 7/10/18
 * Time: 3:24 PM
 */

interface IConfig {
    public function getValue($key);
}

class Configuration implements IConfig {
    private static $instance = null;
    private $configArray=array();

    public function getValue($key) {
        $this->configArray = include './configuration.php';
        return ($this->configArray[$key]);
    }
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone() {}
    private function __construct() {}
    private function __wakeup(){}
}

$Object = Configuration::getInstance();
print_r($Object->getValue('param2'));