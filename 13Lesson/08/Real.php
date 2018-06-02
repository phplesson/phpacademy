<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 14:45
 */
class Real extends Operand
{
    /**
     * @var Checker
     */
    protected static $checker;
    
    protected $val;

    public static function check($a) {
        return is_int($a);
    }

    public static function getZero() {
        return 0;
    }

    public static function getFromStr($str) {
        $data = [];
        if (preg_match('/^[+-]?\\d+$/', $str, $data)) {
            return new self((int)$str);
        } else {
            return null;
        }
    }

    public function __construct($val)
    {
        list($val) = static::$checker->checkVars($val);
        $this->val = $val;
    }

    /**
     * @param static $a
     * @param static $b
     * @return static
     */
    protected static function _add($a, $b) {
        $a->val += $b->val;
        
        return $a;
    }

    /**
     * @param static $a
     * @param static $b
     * @return static
     */
    protected static function _sub($a, $b) {
        $a->val -= $b->val;

        return $a;
    }
    
    public function __toString()
    {
        return (string) $this->val;
    }
}

Real::initChecker();