<?php
interface Addable {
    function add(Addable $obj);
}

abstract class P implements Addable {
    //class should be abstract, because the class should implement add() method according Addable interface
    //but P doesn't have add() method. Abstract class - it means we can not create an object(new P())
    //we use it just for implement something general for children classes.

    protected function checkParam(Addable $obj) {
        if (!($obj instanceof static)) {
            echo 'param is not instance of ' . static::class . PHP_EOL;
            return false;
        } else {
            echo 'checkParam(): param is correct' . PHP_EOL;
            return true;
        }
    }
}

class A extends P{
    protected $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function add(Addable $obj) {
        if (!$this->checkParam($obj)) {
            return;
        }
        $this->number += $obj->number;
    }

    public function __toString()
    {
        return (string)$this->number;
    }
}

class B extends P{
    protected $re;
    protected $im;

    public function __construct($re, $im)
    {
        $this->re = $re;
        $this->im = $im;
    }

    public function add(Addable $obj) {
        if (!$this->checkParam($obj)) {
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

$a = new A(1);
$b = new B(1,1);
$c = new B(-2,-10);

$a->add($b);
$b->add($c);

echo $a . PHP_EOL;
echo $b . PHP_EOL;

echo <<<'TEXT'
work without mistake. checkParam() uses static insted self.
static means the same as self - current class, but
self depends on declaration - if the point where it is used is in class P, self means P
static depends on execution - if we reach point where it is used from calling class A, static means A

we call $a->add(). So we call A class function, then we call $this->checkParam().
checkParams described in P class ! only described, 
but A class has got checkParam function too (from parent).

TEXT;
echo PHP_EOL;
