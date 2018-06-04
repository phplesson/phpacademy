<?php

class A {
    protected $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function add(A $obj) {
        $this->number += $obj->number;
    }

    public function __toString()
    {
        return (string)$this->number;
    }
}

class B {
    protected $re;
    protected $im;

    public function __construct($re, $im)
    {
        $this->re = $re;
        $this->im = $im;
    }

    public function add(B $obj) {
        $this->re += $obj->re;
        $this->im += $obj->im;
    }

    public function __toString()
    {
        return $this->re . (($this->im < 0)? '-' : '+') . 'i'. abs($this->im);
    }
}

$a = new A(1);
$b = new A(10);
$c = new A(0);
$c->add($a);
$c->add($b);
echo $c . PHP_EOL;

$a = new B(1,1);
$b = new B(10, -100);
$a->add($b);
echo $a . PHP_EOL;
