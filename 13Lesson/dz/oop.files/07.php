<?php

class A {
    protected $a;

    //impossible object creation through 'new' operator, because it has got protected __counstructor()
    // impossible only from outside. but it is possible from inside
    
    public static function getObject() {
        $obj = new self();
        return $obj;
        
        // or more simple
        //return new self();
    }
    
    protected function __construct()
    {
        $this->a = 100;
    }
}

//$a = new A();    - impossible way

$a = A::getObject(); // - possible way
print_r($a);