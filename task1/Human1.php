<?php
/**
 * Created by PhpStorm.
 * User: vladislavkogaj
 * Date: 29.06.18
 * Time: 14:15
 *
 */


class Human1
{
    public $name;
    public $age;

    public function __toString()
    {
        return "Имя: $this->name, возраст: $this->age";
    }

}