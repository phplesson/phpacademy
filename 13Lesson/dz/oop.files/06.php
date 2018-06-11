<?php

class A {
    protected static $a;
    
    public static function setA($value){
        self::$a = $value;
    }
    
    public static function getA(){
        return self::$a;
    }
}


//static variables and functions are part of a class (not a part of object)
// self - link to current class-body(variables, functions)
// the same as $this, $link in 13Lesson/06/*.php

A::setA(100);
echo A::getA() . PHP_EOL;
A::setA('newValue') . PHP_EOL;
echo A::getA() . PHP_EOL;
