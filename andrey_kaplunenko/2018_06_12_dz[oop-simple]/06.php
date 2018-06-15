<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 6/15/18
 * Time: 11:42 AM
 */

/**
 * 6. взять решение из 5 задачи. Добавить поле - уникальный идентификатор, и каждый обьект имеет уникальное значение в кажестве значения -
 * можно воспользоваться функцией uniqid()
 * Также реализовать логику - класс содержит статические поля, где ведет учет создданных обьектов -
 * количество, и массив ссылок на них). Подсказка. обновление количества и массива должно происходить в констукторе,
 * и обратное в деструкторе.
 */
class human
{
    protected $name;
    protected $age;
    protected $objectID = 0; //uniq ID for object, we'll random generate it in constructor
    static protected $numOfObjects = 0; //number of created objects (objects human + objects child)
    static protected $linksToObjects = array(); //array for storing links to objects

    protected function __construct(string $name, int $age)
    {
        $this->name=mb_convert_case($name,MB_CASE_TITLE,"UTF-8");
        $this->age=$age;
        $this->objectID=uniqid(get_called_class()); //we use called class name as a prefix for uniqID
        self::$numOfObjects++; //when object created, increment counter of objects on 1
        self::$linksToObjects[$this->objectID]=$this; //when object created, let's create an array element with key=objectID and value=link to object
    }

    static public function getStat()
    {
        return self::$numOfObjects;
    }

    public function __toString()
    {
        return ($this->name.', '.$this->age.' years old. ID='.$this->objectID.PHP_EOL);
    }

    public static function getInstance (string $name, int $age)
    {
        return new static($name, $age); //"Late Static Binding": we use NEW STATIC not NEW SELF because we want new object from _calling_ class NOT always from human where function described
    }

    public static function viewObjects()
    {
        print_r(self::$linksToObjects);
    }

    public function deleteInstance ($var_name)
    {
        unset(self::$linksToObjects[$this->objectID]); //delete element (link to value) of static array $linksToObjects which belongs to class
        unset($GLOBALS[$var_name]); //delete last link to the same value. var_name - is name of variable in global visibility area, such as when we create this variable in script (not in function, not in class)
        //now, when both links were removed, destructor will be called
    }

    public function __destruct()
    {
        self::$numOfObjects--; //because object deleted, decrease counter of objects on 1
    }
}

class child extends human
{
    protected $dateCreated;
    protected function __construct(string $name, int $age)
    {
        parent::__construct($name, $age);
        $this->dateCreated = date('Y.m.d H:i:s', time());
    }
    public function __toString()
    {
        return ($this->name.', '.$this->age.' years old. ID='.$this->objectID.' Registered on '.$this->dateCreated.PHP_EOL);
    }
}

//let's create some instances
$human1 = human::getInstance('adam',36);
$human2 = human::getInstance('eva', 28);
$child1 = child::getInstance('kain', 35);
$child2 = child::getInstance('avel', 33);

echo 'Number of existing instances (of classes human AND child): '.human::getStat().PHP_EOL.'Let\'s delete some instances...'.PHP_EOL;

//let's delete some instances, in this script we should use special method (not just $human2=null), because we need delete 2 links to object:
//one from global visibility area _HERE_, and second - from static array belongs to class human
$human2->deleteInstance('human2');
$child1->deleteInstance('child1');

echo 'Number of existing instances (of classes human AND child): '.human::getStat().PHP_EOL;

human::viewObjects();

echo 'And now, let\'s check if __toString works fine:'.PHP_EOL.'   '.$human1.'   '.$child2;