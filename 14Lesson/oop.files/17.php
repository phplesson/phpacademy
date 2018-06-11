<?php
interface Addable {
    function add(Addable $obj);
}
// interface - just a declaration about methods which should be implemented

class A implements Addable{
    protected $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function add(Addable $obj) {//!!
        if (!($obj instanceof self)) {
            trigger_error('can not add $obj - it is not instance of ' . self::class, E_USER_NOTICE);
            //self::class the same __CLASS__
            return;
        }
        $this->number += $obj->number;
    }
    
    public function __toString()
    {
        return (string)$this->number;
    }
}

class B implements Addable{
    protected $re;
    protected $im;

    public function __construct($re, $im)
    {
        $this->re = $re;
        $this->im = $im;
    }

    public function add(Addable $obj) {//!!
        if (!($obj instanceof self)) {
            trigger_error('can not add $obj - it is not instance of ' . self::class, E_USER_NOTICE);
            //self::class the same __CLASS__
            return;
        } 
        $this->re += $obj->re;
        $this->im += $obj->im;
    }

    public function __toString()
    {
        return $this->re . (($this->im < 0)? '-' : '+') . 'i'. abs($this->im);
    }
}
// but Addable not specify number, re, im fields
// need extra check

$a = new A(1);
$b = new B(1,1);
$c = new B(-2,-10);

$a->add($b);
$b->add($c);

echo $a . PHP_EOL;
echo $b . PHP_EOL;