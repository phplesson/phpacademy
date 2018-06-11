<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 09.06.2018
 * Time: 13:08
 */
error_reporting(0x000000ff);

$i = 0x0000000a;

$i = (string)$i;
echo $i . PHP_EOL;

class A {
  public function __toString()
  {
    return 'hello';
  }
}

$obj = new A();
//$str = (string)$obj;
//$str = $obj->__toString();
//echo $str;
echo $obj . PHP_EOL;

class B {
  protected $a;

  public function __construct()
  {
    $this->a = new A();
  }

  public function __toString()
  {
    return (string)$this->a;
  }
}

$b = new B();
//$str = (string)$b;
//$str = $b->__toString();
//echo $str;
echo $b . PHP_EOL;
