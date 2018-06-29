<?php
/**
 * Created by PhpStorm.
 * User: vladislavkogaj
 * Date: 29.06.18
 * Time: 14:01
 *
 *
 */

class Human3{
    public $name;
    public $age;

    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString()
    {
        return "Имя: $this->name, возраст: $this->age";
    }
}

