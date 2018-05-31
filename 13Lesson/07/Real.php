<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 14:45
 */
class Real extends Operand
{    
    protected $val;

    public static function check($a) {
        return is_int($a);
    }

    public static function getZero() {
        return new static(0);
    }

    public static function getFromStr($str) {
        $data = [];
        if (preg_match('/^[+-]?\\d+$/', $str, $data)) {
            return new static((int)$str);
        } else {
            return null;
        }
    }

    public function __construct($val)
    {
        list($val) = static::$checker->checkVars($val);
        $this->val = $val;
    }
    
    protected function getForResult($update) {
        if ($update) {
            $a = this;
        } else {
            $a = new static($this->val);
        }
        
        return $a;
    }
    
    public function add(Real $b, $update = true) {
        $a = $this->getForResult($update);
        
        $a->val += $b->val;
        
        return $a;
    }
    
    public function sub(Real $b, $update = true) {
        $a = $this->getForResult($update);

        $a->val -= $b->val;

        return $a;
    }
    
    public function __toString()
    {
        return (string) $this->val;
    }
}

Real::initChecker();