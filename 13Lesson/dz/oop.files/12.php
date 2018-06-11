<?php

class Body {
    const MAN = 1;
    const WOMAN = 2;

    protected $name;
    protected $sex;

    public static function createBody($name, $sex) {
        echo __CLASS__ . '+' . __METHOD__ . '()' . PHP_EOL;
        
        if ($sex !== self::MAN && $sex !== self::WOMAN) {
            return null; 
        } else {
            return new self($name, $sex);
        }
    }

    protected function __construct($name, $sex)
    {
        //megic constants like __FILE__ __LINE__
        //__CLASS__ means current class name, __METHOD__ means current function|method name
        echo __CLASS__ . '+' . __METHOD__ . '()' . PHP_EOL;
        
        $this->name = $name;
        $this->sex = $sex;
    }
}

class Person extends Body {//means class Person has got all from class Body with some different
    protected $age; //add extra field
    
    public static function createPerson($name, $sex, $age) //add extra static function
    {
        echo __CLASS__ . '+' . __METHOD__ . '()' . PHP_EOL;
        $obj = new self($name, $sex, $age);
        return $obj;
    }
    
    protected function __construct($name, $sex, $age)
    {
        echo __CLASS__ . '+' . __METHOD__ . '()' . PHP_EOL;
        parent::__construct($name, $sex); //call __parent constructor()
        $this->age = (int)$age;
    }

}

$obj1 = Person::createPerson('name', Person::MAN, 13);
print_r($obj1);

$obj2 = Person::createBody('name', Person::WOMAN);
print_r($obj2);

echo 'it is because in createBody() we use new self() - link to current class, and it is body' . PHP_EOL;

echo get_class($obj1) . PHP_EOL;
echo get_class($obj2) . PHP_EOL;