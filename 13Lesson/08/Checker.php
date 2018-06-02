<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 14:59
 */
class Checker
{
    protected $getZero;
    protected $check;
    
    public function __construct($check, $getZero)
    {
        if (!is_callable($check) || !is_callable($getZero)) {
            trigger_error('bad input parameteres - both params should be callable', E_USER_ERROR);
        }
        
        $this->check = $check;
        $this->getZero = $getZero;
    }
    
    public function checkVars() {
        $args = func_get_args();

        foreach($args as $key => &$value) {
            if (!call_user_func($this->check, $value)) {
                trigger_error("bad input parameter '$key':" . print_r($value, true), E_USER_WARNING);
                $value = call_user_func($this->getZero);
            }
        }

        return $args;
    }
}