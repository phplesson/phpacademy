<?php

class A {
    protected $a;

    public static function getObject() {
        $obj = new self();
        
        //from inside object variable(field) is accessible
        $obj->a = 200;
        
        return $obj;
    }

    protected function __construct()
    {
        $this->a = 100; 
    }
}


$a = A::getObject();
print_r($a);