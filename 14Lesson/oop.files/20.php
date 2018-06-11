<?php

class A {
    public function do() {
        echo __CLASS__ . PHP_EOL;
    }
}

class B extends A{
    //перекрывает метод родителя
    public function do() {
        echo __CLASS__ . PHP_EOL;
    }
}

class C extends A {
    //расширяет метод родителя - добавляет к родительскому функционалу свой.
    public function do() {
        parent::do();
        echo __CLASS__ . PHP_EOL;
    }
}

$b = new B();
$c = new C();

$b->do();
echo '------------------' . PHP_EOL;
$c->do();