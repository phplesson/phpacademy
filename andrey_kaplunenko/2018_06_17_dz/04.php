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
    protected static $runCounter=array( //array for storing numbers of calls of each methods, we do it static because objects are subject to change -
        'construct' => 0,               //they are creates, destroys, but we want count calling magic methods in all objects during script runtime
        'set' => 0,
        'get' => 0,
        'isset' => 0,
        'unset' => 0,
        'sleep' => 0,
        'wakeup' => 0,
        'destruct' => 0,
        'call' => 0,
        'clone' => 0,
        'invoke' => 0,
        'tostr' => 0,
    );

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
        self::$runCounter['construct']++;
    }

    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
        $this->getCallingMethod();
        self::$runCounter['set']++;
    }

    public function __get($name)
    {
        self::$runCounter['get']++;
        $this->getCallingMethod();
        if (property_exists($this, $name)) {
            return $this->$name;
        } else return null;
    }

    public function  __isset($name)
    {
        self::$runCounter['isset']++;
        $this->getCallingMethod();
        return isset($this->$name);
    }

    public function __unset($name)
    {
        self::$runCounter['unset']++;
        $this->getCallingMethod();
        unset($this->$name);
    }

    //__sleep() function returns array with JUST NAMES of properties we want to serialize, not variables, not links, just names in string format.
    public function __sleep()
    {
        self::$runCounter['sleep']++;
        $this->getCallingMethod();
        return array(
            'num2',
            'text1',
            'text2',
            //and yes, we don't want text3 to be serialized
        );
    }

    public function __destruct() //this magic func do nothing, just show that it was called...
    {
        self::$runCounter['destruct']++;
        $this->getCallingMethod();
    }

    public function __wakeup()
    {
        self::$runCounter['wakeup']++;
        $this->getCallingMethod();
        $this->text3='assign some text to text3 after wakeup';
    }

    public function __call($name, $arguments)
    {
        self::$runCounter['call']++;
        $this->getCallingMethod();
        if ($name === 'concatenate') { //using __call() to call defined but protected method
            return $this->concatenate($arguments[0], $arguments[1]);
        } else return ('calling undefined method '.$name); //using __call() to call undefined method
    }

    public function __clone()
    {
        self::$runCounter['clone']++;
        $this->getCallingMethod();
        $this->text3='default value';
    }

    public function __invoke() //__invoke() method will return all properties of object as array
    {
        self::$runCounter['invoke']++;
        $this->getCallingMethod();
        $arr=array(
            $this->num1,
            $this->num2,
            $this->text1,
            $this->text2,
            $this->text3,
        );
        return $arr;
    }

    public function __toString()
    {
        self::$runCounter['tostr']++;
        $this->getCallingMethod();
        return ('construct='.self::$runCounter['construct'].PHP_EOL.
            'set='.self::$runCounter['set'].PHP_EOL.
            'get='.self::$runCounter['get'].PHP_EOL.
            'isset='.self::$runCounter['isset'].PHP_EOL.
            'unset='.self::$runCounter['unset'].PHP_EOL.
            'sleep='.self::$runCounter['sleep'].PHP_EOL.
            'wakeup='.self::$runCounter['wakeup'].PHP_EOL.
            'destruct='.self::$runCounter['destruct'].PHP_EOL.
            'call='.self::$runCounter['call'].PHP_EOL.
            'clone='.self::$runCounter['clone'].PHP_EOL.
            'invoke='.self::$runCounter['invoke'].PHP_EOL.
            'toString='.self::$runCounter['tostr'].PHP_EOL);
    }
}

$blackBox1 = new BlackBox(2, 5, 'first string', 'second string', 'third string');
$blackBox1->num1 = 10; //testing __set()
echo $blackBox1->num1.PHP_EOL; //testing __get()
echo isset($blackBox1->num1).PHP_EOL; //testing __isset()
unset($blackBox1->num1); //testing __unset()
$savedData = serialize($blackBox1); //testing __sleep()
echo $savedData.PHP_EOL; //let's see what was saved on __sleep()
unset ($blackBox1); //destroy object
$blackBox2 = unserialize($savedData); //re-create object from saved state, testing __wakeup()
var_dump($blackBox2);
echo $blackBox2->SomeMethod().PHP_EOL; //testing __call() with undefined method
echo $blackBox2->concatenate('first text ', 'second text'); //testing __call() with existing but protected method
$blackBox3 = clone $blackBox2; //testing __clone()
var_dump($blackBox3); //let's see what in cloned object
var_dump($blackBox3()); //calling object as function, testing __invoke()
echo $blackBox3; //testing __toString()