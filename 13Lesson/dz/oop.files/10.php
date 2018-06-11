<?php
class Person {
    const MAN = 1;
    const WOMAN = 2;

    protected $name;
    protected $sex;

    public function __construct($name, $sex)
    {
        $this->name = $name;

        if ($sex !== self::MAN && $sex !== self::WOMAN) {
            //E_USER_ERROR - it is fatal error, try to prevent stop script execution
            trigger_error('bad sex parameter', E_USER_WARNING);
        } else {
            $this->sex = $sex;
        }
    }
}

$p = new Person('Alex', 3);
print_r($p);

echo 'so, object is created without sex value. it is bad too' . PHP_EOL;