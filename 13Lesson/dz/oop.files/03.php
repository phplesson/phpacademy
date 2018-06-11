<?php
class MyClass {
    public $objectVariable1 = 'public value'; //visible for every one
    protected $objectVariable2 = 'protected value'; //only from inside class(object)
    
    public function echoValue1($val) {
        echo $val . PHP_EOL;
    }
    protected function echoValue2($val) {
        echo $val . PHP_EOL;
    }
}

$obj = new MyClass();
print_r($obj);  echo PHP_EOL;
print_r($obj->echoValue1('run echoValue1'));  echo PHP_EOL;
print_r($obj->echoValue2('run echoValue2'));  echo PHP_EOL;
