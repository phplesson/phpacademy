<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 16.06.2018
 * Time: 12:28
 */

namespace MyHtml;

/**
 * Class Human
 * @package MyHtml
 *
 * @property $info;
 * @property $tel;
 *
 * @method null nomethod1($a, $b);
 */
class Human implements IStringify
{
    use HumanTrait;
    protected $age;

    protected $additional = [
        'info' => '',
        'tel' => '',
        ];

    public function setAge($age) {
        $this->age = $age;
    }

    public function __toString()
    {
        return "{$this->name} {$this->age}";
    }

    public function __set($name, $value)
    {
        if(array_key_exists($name, $this->additional)) {
            $this->additional[$name] = $value;
        }
    }

    public function __get($name)
    {
        if(array_key_exists($name, $this->additional)) {
            return $this->additional[$name];
        }

        return 'no exist';
    }

    public function __call($name, $arguments)
    {
        echo $name . '  work' . PHP_EOL;
        var_dump($arguments);
    }
}