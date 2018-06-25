<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 6/25/18
 * Time: 9:14 PM
 */
/**
 * пройдитесь по всем магическим методам - их все реализуйте и пускай каждый выводит свое имя(что он запустился)
 * метод тустринг магический должен возвращать сколько уже разных магических методов хоть раз срабатывали
 * подберите минимальное количество действий, что бы каждый магический метод хоть раз сработал
 */

class BlackBox {
    protected $gear1=0;
    protected $gear2=0;

    //Method, which we will use to determine calling method/function. It returns calling func name like ClassName->MethodName
    protected function getCallingMethod(){
        $exc = new Exception();
        $trace = $exc->getTrace();
        //position 0 would be the line that called this function so we ignore it
        //$last_call = $trace[1]; //uncomment this and comment next line if we want max info
        $last_call = 'Executed method: '.$trace[1]['class'].'->'.$trace[1]['function'];
        print_r($last_call, false);
        print_r(PHP_EOL);
    }

    public function __construct($gear1, $gear2)
    {
        $this->gear1=$gear1;
        $this->gear2=$gear2;
        $this->getCallingMethod();
    }

    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
        $this->getCallingMethod();
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            $this->getCallingMethod();
            return $this->$name;
        } else return null;
    }

    public function  __isset($name)
    {
        $this->getCallingMethod();
        return isset($this->$name);
    }


}

$blackBox1 = new BlackBox(2, 5);
$blackBox1->gear1 = 10;
echo $blackBox1->gear1.PHP_EOL;
echo isset($blackBox1->gear1);