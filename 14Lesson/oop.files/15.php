<?php

class A {
    protected $number;
    
    public function __construct($number)
    {
        $this->number = $number;
    }
    
    public function add(A $obj) { //specify type of parameter. so add(10) - it is fatal error, cause 10 is not A object
        $this->number += $obj->number;
    }
    
    //magic method. it is called when $obj should be transformed to string... echo $obj;  $a = 'something' . $obj; ...
    public function __toString()
    {
        return (string)$this->number;
    }
}

$a = new A(11);
$b = new A(100);

echo $a . PHP_EOL;
echo $b . PHP_EOL;
$a->add($b);
echo $a . PHP_EOL;