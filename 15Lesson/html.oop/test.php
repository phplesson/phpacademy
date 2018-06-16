<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 16.06.2018
 * Time: 12:44
 */
include('./vendor/autoload.php');
$obj;

/* @var $obj \MyHtml\Human|\MyHtml\Tag */

$obj = new \MyHtml\Human();
$obj->setName('vasya');
$obj->setAge(21);

echo $obj . PHP_EOL;

echo "<PRE>";
var_dump($obj);

$obj->info = 'some info';
var_dump($obj);

var_dump($obj->info);
var_dump($obj->tel);
var_dump($obj->ttt);

$obj->nomethod1('111', 23, [1,2,3]);
$obj->nomethod2();



class A {
    public function a1(){}
    //......
    public function a100(){}
}

class B {
    protected $a;

    public function __construct(A $obj)
    {
        $this->a = $obj;
    }

    public function a1(){return $this->a->a1();}
    //...
    public function a100(){return $this->a->a1();}

    public function __call($name, $arguments)
    {
        //if $name like axxx
        return $this->a->$name();
        //else

    }
}

$b = new B(new A());

class Creator {
    public function getObj($type, $args) {
        if (class_exists($type)) {
            $obj = new $type($args);
            return $obj;
        } else {
            return null;
        }
    }
}

$creator = new Creator();

$obj1 = $creator->getObj('Type1Class', [1,2]);
$obj2 = $creator->getObj('Type2Class', [1,2]);
$obj3 = $creator->getObj('Type3Class', [1,2]);

$obj1 = $creator->type1([1,2]);

$obj();