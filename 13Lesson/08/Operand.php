<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 15:52
 */
class Operand
{
    /**
     * @var Checker
     */
    protected static $checker;

    public static function initChecker() {
        static::$checker = new Checker([get_called_class(), 'check'], [get_called_class(), 'getZero']);
    }

}