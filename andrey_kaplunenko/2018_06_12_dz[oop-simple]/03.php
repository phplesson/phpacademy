<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 6/13/18
 * Time: 9:37 PM
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

$human1 = new human('avel', 22);
$human2 = new human('eva', 20);
echo $human1.$human2.PHP_EOL;