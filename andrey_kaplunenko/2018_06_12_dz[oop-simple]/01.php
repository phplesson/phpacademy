<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 6/13/18
 * Time: 1:27 PM
 */
/**
 * 1. Описать класс человек с публичными полями - имя и возраст. Создать несколько обьктов этого класса и присвоить им значения
 * Например - Вася 22, Оля 21
 */
class human
{
    public $name;
    public $age;
    public function __toString()
    {
        return ($this->name.', '.$this->age.' years old.'.PHP_EOL);
    }
}

$human1 = new human();
$human2 = new human();

$human1->age = 25;
$human1->name = 'Adam';

$human2->age = 24;
$human2->name = 'Eva';

echo $human1.$human2.PHP_EOL;
