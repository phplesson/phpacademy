<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 21.06.2018
 * Time: 15:59
 * 6. взять решение из 5 задачи. Добавить поле - уникальный идентификатор, и каждый обьект имеет уникальное значение
 * в кажестве значения - можно воспользоваться функцией uniqid()
Также реализовать логику - класс содержит статические поля, где ведет учет создданных обьектов -
количество, и массив ссылок на них). Подсказка. обновление количества и массива должно происходить в констукторе,
и обратное в деструкторе.
 */

class Persons {
    protected $name;
    protected $age;
    protected $IdOfObjects = 0;
    static protected $CountOfObjects = 0;
    static protected $LinksToObjects = array();
    protected function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
        $this->IdOfObjects = uniqid();
        static::$CountOfObjects++;
        static::$LinksToObjects[$this->IdOfObjects] = $this;
    }

    public function __toString() {
        return ($this->name . ' ' . '-' . ' ' . $this->age . ' ' . 'years old' . ' ' . 'ID_of_object = ' . ' ' . $this->IdOfObjects);
    }

    static public function getCount()
    {
        return static::$CountOfObjects;
    }

    public static function LinksToObjects()
    {
        return static::$LinksToObjects;
    }

    public function deleteObjects ($object_name)
    {
        unset(static::$LinksToObjects[$this->IdOfObjects]);
        unset($GLOBALS[$object_name]);
    }

    public function __destruct()
    {
        static::$CountOfObjects--;
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
        return ($this->name . ' ' . '-' . ' ' . $this->age . ' ' . 'years old.' . ' ' . 'ID_of_object = '. $this->IdOfObjects . '.'
            . ' ' . 'Registered on' . ' ' . $this->CreationTimeStamp);
    }
    public static function StaticMethod ($name, $age, $CreationTimeStamp)
    {
        return new static( $name, $age, $CreationTimeStamp);
    }
}


$obj1 = Children::StaticMethod('Bohdan',19, NULL);
$obj2 = Children::StaticMethod('Andrew',20, NULL);
echo 'Exiting objects:' . PHP_EOL;
echo $obj1 . PHP_EOL . $obj2 . PHP_EOL;
echo 'Number of existing Objects: ' . ' ' . Persons::getCount() . PHP_EOL . PHP_EOL;
//echo 'Info about objects:' . ' ' . Persons::LinksToObjects();

echo 'let`s add 1 new object and try upload count of objects: ' . PHP_EOL;
$obj3 = Children::StaticMethod('Alex',25, NULL);
echo 'Exiting objects:' . PHP_EOL;
echo $obj1 . PHP_EOL . $obj2 . PHP_EOL . $obj3 . PHP_EOL;
echo 'Number of existing Objects: ' . ' ' . Persons::getCount() . PHP_EOL . PHP_EOL;

//let`s try to delete 1 object.
$obj3->deleteObjects('obj3');
echo 'let`s show count of objects after deletion 1 object.' . PHP_EOL;
echo 'Number of existing Objects: ' . ' ' . Persons::getCount() . PHP_EOL;
