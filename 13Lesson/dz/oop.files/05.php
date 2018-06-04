<?php

class A {
    protected $a;
    
    //impossible object creation through 'new' operator, because it has got protected __counstructor()
    protected function __construct()
    {
        $this->a = 100;
    }
}

$a = new A();