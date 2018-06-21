<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 19.06.2018
 * Time: 19:26
 * 1. Описать класс человек с публичными полями - имя и возраст. Создать несколько обьктов этого класса и присвоить им значения
Например - Вася 22, Оля 21 ..
 */

class Persons {
    public $name;
    public $age;

    public function __toString() {
        return ($this->name . ' ' . '-' . ' ' . $this->age . ' ' . 'years old');
    }
}

$obj1 = new Persons();
$obj2 = new Persons();


$obj1->name = 'Bohdan';
$obj1->age = 19;

$obj2->name = 'Andrew';
$obj2->age = 20;

echo $obj1 . PHP_EOL .$obj2;