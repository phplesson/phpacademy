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
    protected $num1=0;
    protected $num2=0;
    protected $text1='';
    protected $text2='';
    protected $text3='';

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

    protected function concatenate ($txt1, $txt2)
    {
        return $txt1.$txt2;
    }

    public function __construct($num1, $num2, $text1, $text2, $text3)
    {
        $this->num1=$num1;
        $this->num2=$num2;
        $this->text1=$text1;
        $this->text2=$text2;
        $this->text3=$text3;
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

    public function __unset($name)
    {
        $this->getCallingMethod();
        unset($this->$name);
    }

    //__sleep() function returns array with JUST NAMES of properties we want to serialize, not variables, not links, just names in string format.
    public function __sleep()
    {
        $this->getCallingMethod();
        return array(
            'num2',
            'text1',
            'text2',
            //and yes, we don't want text3 to be serialized
        );
    }

    public function __wakeup()
    {
        $this->getCallingMethod();
        $this->text3='assign some text to text3 after wakeup';
    }

    public function __call($name, $arguments)
    {
        $this->getCallingMethod();
        if ($name === 'concatenate') { //using __call() to call defined but protected method
            return $this->concatenate($arguments[0], $arguments[1]);
        } else return ('calling undefined method '.$name); //using __call() to call undefined method
    }

}

$blackBox1 = new BlackBox(2, 5, 'first string', 'second string', 'third string');
$blackBox1->num1 = 10;
echo $blackBox1->num1.PHP_EOL;
echo isset($blackBox1->num1).PHP_EOL;
unset($blackBox1->num1); //unset num1
$savedData = serialize($blackBox1);
echo $savedData.PHP_EOL;
unset ($blackBox1);
$blackBox2 = unserialize($savedData);
var_dump($blackBox2);
echo $blackBox2->SomeMethod().PHP_EOL;
echo $blackBox2->concatenate('first text ', 'second text');