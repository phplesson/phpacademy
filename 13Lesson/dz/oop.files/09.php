<?php
class Person {
    //class constant - it is like public static $variable, and define('CONST_NAME', <const_value>) for a class
    const MAN = 1;
    const WOMAN = 2;
    
    protected $name;
    protected $sex;
    
    public function __construct($name, $sex)
    {
        $this->name = $name;
        
        if ($sex !== self::MAN && $sex !== self::WOMAN) {
            trigger_error('bad sex parameter', E_USER_ERROR);
        } else {
            $this->sex = $sex;
        }
    }
}

$p = new Person('Alex', 3);