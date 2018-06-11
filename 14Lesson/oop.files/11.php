<?php
class Person {
    const MAN = 1;
    const WOMAN = 2;

    protected $name;
    protected $sex;
    
    public static function createPerson($name, $sex) {

        if ($sex !== self::MAN && $sex !== self::WOMAN) {
            trigger_error('bad sex parameter', E_USER_WARNING);
            return null; //!!! there are not enough correct data, so we do not create an object
        } else {
            return new self($name, $sex);
        }
    }

    protected function __construct($name, $sex)
    {
        $this->name = $name;
        $this->sex = $sex;
    }
}

//$p = new Person('Alex', 3);
$p = @Person::createPerson('Alex', 3); //hide error message by using @
var_dump($p);

$p = Person::createPerson('Alex', Person::MAN);
var_dump($p);

//so
$name = 'Name Value';
$sex = 'incorrect sex value';

if (!($obj = @Person::createPerson($name, $sex))) {
    echo 'bad parameters for person' . PHP_EOL;
} else {
    echo 'object created' . PHP_EOL;
}