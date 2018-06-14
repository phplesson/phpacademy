<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 6/13/18
 * Time: 4:35 PM
 */

/**
 * Class human
 * @property string name
 * @property int age
 */
class human
{
    protected $name;
    protected $age;
    public function setName(string $name)
    {
        $this->name = mb_convert_case($name,MB_CASE_TITLE,"UTF-8");
    }

    public function setAge(int $age)
    {
        if(is_numeric($age)) {
            $this->age = $age;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function __toString()
    {
        return ($this->name.', '.$this->age.' years old.'.PHP_EOL);
    }
}

$human1 = new human();
$human2 = new human();

$human1->setName('адам');
$human1->setAge(26);

$human2->setName('Eva');
$human2->setAge(23);

echo $human1->getName().':'.$human1->getAge().PHP_EOL.$human2->getName().':'.$human2->getAge().PHP_EOL;