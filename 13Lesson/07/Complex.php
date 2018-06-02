<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 14:45
 */
class Complex
{
    /**
     * @var Checker;
     */
    protected static $checker;
    
    protected $re;
    protected $im;
    
    public static function initChecker() {
        self::$checker = new Checker([__CLASS__, 'check'], [__CLASS__, 'getZero']);
    }

    public static function check($a) {
        return is_array($a)
            && (count($a) === 2)
            && (isset($a['re']))
            && (isset($a['im']))
            && is_int($a['re'])
            && is_int($a['im']);
    }

    public static function getZero() {
        return ['re' => 0, 'im' => 0];
    }

    public static function getFromStr($str) {
        $data = [];
        if (preg_match_all('/^([+-]?\\d+)i([+-]?\\d+)$/', $str, $data)) {
            return new self((int)$data[1][0], (int)$data[2][0]);
        } else {
            return null;
        }
    }

    public function __construct($re, $im)
    {
        list($complex) = self::$checker->checkVars(['re' => $re, 'im' => $im]);
        $this->re = $complex['re'];
        $this->im = $complex['im'];
    }

    protected function getForResult($update) {
        if ($update) {
            $a = $this;
        } else {
            $a = new self($this->re, $this->im);
        }

        return $a;
    }
    
    public function add(Complex $b, $update = true) {
        $a = $this->getForResult($update);
        
        $a->re += $b->re;
        $a->im += $b->im;
        
        return $a;
    }
    
    public function sub(Complex $b, $update = true) {
        $a = $this->getForResult($update);

        $a->re -= $b->re;
        $a->im -= $b->im;

        return $a;
    }
    
    public function __toString()
    {
        $str = $this->re;
        
        $str .= ($this->im >= 0)? '+' : '-';
        
        $str .= 'i' . abs($this->im);
        
        return $str;
    }
}

Complex::initChecker();