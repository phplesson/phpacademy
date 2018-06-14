<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 6/14/18
 * Time: 12:28 PM
 */
class human
{
    protected $name;
    protected $age;
    public function __construct(string $name, int $age)
    {
        $this->name=mb_convert_case($name,MB_CASE_TITLE,"UTF-8");
        $this->age=$age;
    }
    public function __toString()
    {
        return ($this->name.', '.$this->age.' years old.'.PHP_EOL);
    }
}

class child extends human
{
    protected $dateCreated;
    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age);
        $this->dateCreated = date('Y.m.d H:i:s', time());
    }
    public function __toString()
    {
        return ($this->name.', '.$this->age.' years old. Registered on '.$this->dateCreated.PHP_EOL);
    }
}

$human1 = new human('adam',36);
$human2 = new human('eva', 28);
$child1 = new child('kain', 35);
$child2 = new child('avel', 33);

echo $human1.$human2.$child1.$child2;