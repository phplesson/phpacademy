<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 15:52
 */
abstract class Operand implements IFromString
{
    /**
     * @var Checker
     */
    protected static $checker;

    public static function initChecker() {
        static::$checker = new Checker([get_called_class(), 'check'], [get_called_class(), 'getZero']);
    }

    protected function getForResult($update) {
        return ($update) ? $this : clone $this;
    }

    /**
     * @param static $a
     * @param static $b
     * @return static
     */
    abstract protected static function _add($a, $b);
    
    /**
     * @param static $a
     * @param static $b
     * @return static
     */
    abstract protected static function _sub($a, $b);
    
    
    public function add(Operand $b, $update = true) {
        $a = $this->getForResult($update);
        
        return static::_add($a, $b);
    }
    
    public function sub(Operand $b, $update = true) {
        $a = $this->getForResult($update);
        
        return static::_sub($a, $b);
    }

}