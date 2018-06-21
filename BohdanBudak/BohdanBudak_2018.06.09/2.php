<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 19.06.2018
 * Time: 19:48
 * 2. Описать класс человек как выше, но поля сделать закрытыми(протектид), и сделать публичные методы для доступа к закрытым
полям - setName($newName) getName() setAge($newAge) getAge()
Создать пару обьектов и задать значения.
 */

class Persons
{
    protected $name;
    protected $age;

    public function setName($NewName) {
        $this->name = $NewName;
    }

    public function setAge($NewAge) {
        $this->age = $NewAge;
    }

    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }

    public function __toString() {
        return ($this->name . ' ' . '-' . ' ' . $this->age . ' ' . 'years old');
    }

}

$obj1 = new Persons();
$obj2 = new Persons();


$obj1->setName('Bohdan');
$obj1->setAge(19);

$obj2->setName('Andrew');
$obj2->setAge(20);


$obj1->getName();
$obj1->getAge();
$obj2->getName();
$obj2->getAge();
echo $obj1 . PHP_EOL . $obj2;





