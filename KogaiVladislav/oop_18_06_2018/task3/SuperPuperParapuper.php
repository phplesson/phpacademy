<?php
/**
 * Created by PhpStorm.
 * User: vladislavkogaj
 * Date: 29.06.18
 * Time: 17:11
 */

class SuperPuperParapuper
{
    protected $cool;
    protected $base;
    protected $super;
    protected $something;

    protected $cool_counter;
    protected $base_counter;
    protected $super_counter;
    protected $something_counter;

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            switch ($name){
                case 'cool':
                    return $this->cool_counter;
                    break;
                case 'base':
                    return $this->base_counter;
                    break;
                case 'super':
                    return $this->super_counter;
                    break;
                case 'something':
                    return $this->something_counter;
                    break;
            }


        } else return NULL;
    }
    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {

            $this->$name = $value;
        } else return NULL;
    }

    public function cool(){
        $this->cool_counter++;
        return (isset($this->cool)) ? $this->cool : NULL;
    }
    public function base(){
        $this->base_counter++;
        return (isset($this->base)) ? $this->base : NULL;
    }
    public function super(){
        $this->super_counter++;
        return (isset($this->super)) ? $this->super : NULL;
    }
    public function something(){
        $this->something_counter++;
        return (isset($this->something)) ? $this->something : NULL;
    }


}
$obj = new SuperPuperParapuper();

$obj->cool = 'papa';
$obj->base = 'mama';

var_dump($obj->cool());
var_dump($obj->base());
var_dump($obj->super());

var_dump($obj->cool());

echo $obj->cool;
echo $obj->super;
echo $obj->base;
echo $obj->something;

$obj->something();
echo $obj->something;

$obj->something = 'hi';
var_dump($obj->something());
echo $obj->something;
