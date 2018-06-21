<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 21.06.2018
 * Time: 11:12
 * 5. Взять решение из 4 задачи. запретить создание обьектов на прямую(через оператор new) - вместо этого создать статический метод
для создания обьектов. создать пару обьектов
 */

class Persons {
    protected $name;
    protected $age;

    protected function __construct($name, $age)
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

    protected function __construct($name, $age, $CreationTimeStamp)
    {
        parent::__construct($name, $age);
        $this->CreationTimeStamp = $CreationTimeStamp = date('Y/m/d G:i:s', time());
    }

    public function __toString() {
        return ($this->name . ' ' . '-' . ' ' . $this->age . ' ' . 'years old.' . ' ' . 'Registered on' . ' ' . $this->CreationTimeStamp);
    }
    public static function StaticMethod ($name, $age, $CreationTimeStamp)
    {
        return new static( $name, $age, $CreationTimeStamp);
    }
}


$obj1 = Children::StaticMethod('Bohdan',19, NULL);
$obj2 = Children::StaticMethod('Andrew',20, NULL);

echo $obj1 . PHP_EOL . $obj2;