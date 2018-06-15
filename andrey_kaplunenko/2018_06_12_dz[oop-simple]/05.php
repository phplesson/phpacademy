<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 6/15/18
 * Time: 10:41 AM
 */

/**
 * 5. Взять решение из 4 задачи. запретить создание обьектов на прямую(через оператор new) - вместо этого создать статический метод
 * для создания обьектов. создать пару обьектов
 */
class human
{
    protected $name;
    protected $age;
    protected function __construct(string $name, int $age)
    {
        $this->name=mb_convert_case($name,MB_CASE_TITLE,"UTF-8");
        $this->age=$age;
    }
    public function __toString()
    {
        return ($this->name.', '.$this->age.' years old.'.PHP_EOL);
    }

    public static function getInstance (string $name, int $age)
    {
        return new static($name, $age);
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
        return ($this->name.', '.$this->age.' years old. Registered on '.$this->dateCreated.PHP_EOL);
    }
}

$human1 = human::getInstance('adam',36);
$human2 = human::getInstance('eva', 28);
$child1 = child::getInstance('kain', 35);
$child2 = child::getInstance('avel', 33);

echo $human1.$human2.$child1.$child2;