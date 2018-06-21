<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 21.06.2018
 * Time: 10:29
 * 4. Описать класс наследник от класса из задачи 3. Добавить одно закрытое поле - меткаВремениСоздания.
Эта метка инициализируеться конструктором. Не забывайте, что и родительский конструктор должен работать.
создать пару обьектов
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


class Children extends Persons{
    protected $CreationTimeStamp;

    public function __construct($name, $age, $CreationTimeStamp)
    {
        parent::__construct($name, $age);
        $this->CreationTimeStamp = $CreationTimeStamp = date('Y/m/d G:i:s', time());
    }

    public function __toString() {
        return ($this->name . ' ' . '-' . ' ' . $this->age . ' ' . 'years old.' . ' ' . 'Registered on' . ' ' . $this->CreationTimeStamp);
    }
}


$obj1 = new Persons('Bohdan', 19);
$obj2 = new Persons('Andrew', 20);
$obj3 = new Children('Bohdan',19, NULL);
$obj4 = new Children('Andrew',20, NULL);

echo $obj1 . PHP_EOL . $obj2 . PHP_EOL . $obj3 . PHP_EOL . $obj4;
