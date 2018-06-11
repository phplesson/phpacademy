<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 09.06.2018
 * Time: 13:47
 */

class A{
  public function d() {
    return get_called_class();
  }
  public function do() {
    echo $this->d() . PHP_EOL;
  }

  public function __toString()
  {
    // TODO: Implement __toString() method.
  }
}

class B extends A{

  public function __toString()
  {
    // TODO: Implement __toString() method.
  }

}

class C extends B {

  public function __toString()
  {
    // TODO: Implement __toString() method.
  }

}
//file1.php
$obj = new C();



//file100.php
if(method_exists($obj, 'do')) {
  //true
  $obj->do();
}

if($obj instanceof C) {
  //true
}
if($obj instanceof A) {
  //true
}

$obj = new A();
if($obj instanceof C) {
  //false
}
if($obj instanceof A) {
  //true
}
