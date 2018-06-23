<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 6/20/18
 * Time: 5:34 AM
 */

/**
 * сделать обьект, который будет реагировать на любое присвоение значения(любого атрибута), при запуске метода с именем
 * атрибута, будет просто выводить значение, при чтении атрибута - выводить количество запусков
 */
class Responder
{
    protected $a;
    protected $b;
    protected $c;

    protected $aCallCount = 0;
    protected $bCallCount = 0;
    protected $cCallCount = 0;

    public function a () {
        $this->aCallCount++;
        if (isset($this->a)) {return ($this->a);} else return null;
    }

    public function b () {
        $this->bCallCount++;
        if (isset($this->b)) {return ($this->b);} else return null;
    }

    public function c () {
        $this->cCallCount++;
        if (isset($this->c)) {return ($this->c);} else return null;
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value; //in this case $this->$property NOT $this->property
        } else return null;
    }

    public function __get($property)
    {
        if (property_exists($this, $property) && $property=='a') {
            return $this->aCallCount;
        } elseif (property_exists($this, $property) && $property=='b') {
            return $this->bCallCount;
        } elseif (property_exists($this, $property) && $property=='c') {
            return $this->cCallCount;
        } else return null;
    }
}

$testObj = new Responder();

$testObj->a = 888;
$testObj->b = 'something';

echo $testObj->a().PHP_EOL;
echo $testObj->a().PHP_EOL;
echo $testObj->a().PHP_EOL;

echo $testObj->b().PHP_EOL;
echo $testObj->b().PHP_EOL;

echo $testObj->c().PHP_EOL;

echo $testObj->a.PHP_EOL;
echo $testObj->b.PHP_EOL;
echo $testObj->c.PHP_EOL;