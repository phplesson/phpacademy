<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 21.06.2018
 * Time: 10:15
 * 3. Описать класс как в примере 2, но вместо публичных методов для установки значения имени и возраста, использовать
конструктор - он должен принимать эти значения и инициализировать поля обьекта этими значениями. создать пару обьектов.
 */

class Persons {
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;

    }

    public function __toString() {
        return ($this->name . ' ' . '-' . ' ' . $this->age . ' ' . 'years old');
    }
}

$obj1 = new Persons('Bohdan', 19);
$obj2 = new Persons('Andrew', 20);
echo $obj1 . PHP_EOL;
echo $obj2;