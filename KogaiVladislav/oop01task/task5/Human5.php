<?php
/**
 * Created by PhpStorm.
 * User: vladislavkogaj
 * Date: 29.06.18
 * Time: 14:38
 *
 *
 */

require_once ('../task3/Human3.php');

class Human5{
    protected static $timeMark;
    protected static $name;
    protected static $age;

    protected function __construct()
    {

    }
    public static function createObj($name,$age){
        self::$name = $name;
        self::$age = $age;
        self::$timeMark = date('l jS \of F Y h:i:s A');
    }
    public static function getObj(){
        return "Имя: ".self::$name.
            ', возраст: '.self::$age.
            ', время создания: '.self::$timeMark;
    }
}