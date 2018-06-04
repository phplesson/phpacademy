<?php
class MyClass {
    public $objectVariable1 = 'public value'; //visible for every one
    protected $objectVariable2 = 'protected value'; //only from inside class(object)
}

$obj = new MyClass();
print_r($obj);  echo PHP_EOL;
print_r($obj->objectVariable1);  echo PHP_EOL;
print_r($obj->objectVariable2);  echo PHP_EOL;
