<?php

//final - restrict overriding by children classes
//запрет переопределения метода в потомках

class A {
    public function do() {
        echo __METHOD__ . PHP_EOL;
    }
    
    public final function doF() {
        echo __METHOD__ . PHP_EOL;
    }
}

class B extends A{
    public function do() {
        echo __METHOD__ . 'overridden parent method' . PHP_EOL;
    }

    //ERROR
    public function doF() {
        echo __METHOD__ . 'overridden parent method' . PHP_EOL;
    }
}