<?php

declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17.02.18
 * Time: 7:50
 */

// Simple define function
/*

function <func_name>() {
    [<some_code>]
}

*/


// echo <something> . PHP_EOL;

function el() {
    echo PHP_EOL;
}

echo "some_string";
echo PHP_EOL;

echo "some_string";
el();

echo "----------END EXAMPLE 1 ----------------";
el();









// Simple define function with parameter
/*

function <func_name>([<arg>]) {
    [<some_code>]
}

*/


function  echoLn($s) {
    echo $s . PHP_EOL;
}

echo "some_string";
echo PHP_EOL;

echoLn("some_string");

echoLn("----------END EXAMPLE 2 ----------------");









// execute function with passing variable


function  echoLn2($s) {
    echo $s . PHP_EOL;
}

echo "some_string";
echo PHP_EOL;

$string = "some_string";
echoLn($string);

echoLn("----------END EXAMPLE 3 ----------------");















// Simple define function with parameterS !!!
/*

function <func_name>([<arg1> [, <arg2>, ... <argN>]]) {
    [<some_code>]
}

*/


function echoLnC($s, $count) {
    echo $s;

    for($i = 0; $i < $count; $i++) {
        echo PHP_EOL;
    }
}


echo "some_string";
echo PHP_EOL;
echo PHP_EOL;

echoLnC("some_string", 2);

echoLnC("----------END EXAMPLE 4 ----------------", 1);














// Simple define function with parameters and default values
/*

function <func_name>([<arg1> [, <arg2>, ... <argN>]]) {
    [<some_code>]
}


<arg1> : $<arg_Name>[ = <arg_default_value>]
*/

function echoLnCD1($s, $count = 1) {
    echo $s;

    for($i = 0; $i < $count; $i++) {
        echo PHP_EOL;
    }
}


function echoLnCD2($s, $count = 1) {
    echoLnC($s, $count);
}

echo "some_string";
echo PHP_EOL;
echo PHP_EOL;

echoLnCD1("some_string", 2);
echoLnCD1("some_string", 2);
echoLnCD1("some_string");
echoLnCD2("some_string");

echoLnCD1("----------END EXAMPLE 5 ----------------");













// Simple define function with parameters and default values and return value
/*

function <func_name>([<arg1> [, <arg2>, ... <argN>]]) {
    [<some_code>]

    [return [<value>|<expression>]];
}


<arg1> : $<arg_Name>[ = <arg_default_value>]


*/


function getFullString($s1, $s2 = PHP_EOL) {
    return $s1 . $s2;
}



echo "some_string";
echo PHP_EOL;
echo PHP_EOL;


echo getFullString("some_string", PHP_EOL . PHP_EOL);


echo getFullString("----------END EXAMPLE 6 ----------------");














// PHP internal(built-in) functions


/*
  example str_repeat;

  @see http://php.net/manual/ru/function.str-repeat.php
 */


function echoLnC2($s, $count) {
    echo $s;

    echo str_repeat(PHP_EOL, $count);
}

function echoLnCD3($s, $count = 1) {
    echoLnC2($s, $count);
}


echo "some_string";
echo PHP_EOL;
echo PHP_EOL;

echoLnCD3("some_string", 2);
echoLnCD3("some_string");

echoLnCD3("----------END EXAMPLE 7 ----------------");















// use functions complicated

function sum($a, $b) {
    return $a + $b;
}

function mult($a, $b) {
    return $a * $b;
}

echo (2 + 3) * 10 . PHP_EOL . PHP_EOL; //expect 50

echoLn((2 + 3) * 10 . PHP_EOL);

echoLn(sum(2,3) * 10 . PHP_EOL);
echoLn(mult(sum(2,3), 10) . PHP_EOL);

echoLn("----------END EXAMPLE 8 ----------------");













// define function complicated  ...

function sayHello($name) {

    function addNewLine($s) {
        return $s . PHP_EOL;
    }

    echo "hello " . addNewLine($name);
}

echo "hello Alex" . PHP_EOL;

sayHello("Alex");

echoLn("----------END EXAMPLE 9.1 ----------------");
//---------------------------------------




echo "Hello world!" . PHP_EOL;

echo addNewLine("Hello world!");

echoLn("----------END EXAMPLE 9.2 ----------------");
//---------------------------------------


echo "3 + 2 = 5" . PHP_EOL;
saySumAnswer(3, 2);
echoLn("----------END EXAMPLE 9.3 ----------------");

function saySumAnswer($number1, $number2) {                             //define after use
    function addTwoNumbers($number1, $number2) { //define BEFORE use
        return $number1 + $number2;
    }

    echo "$number1 + $number2 = " . addTwoNumbers($number1, $number2) . getEndOfLine();
}

function getEndOfLine() {                             //define after use
    return PHP_EOL;
}

//use variables complicated

$string = "program string" . PHP_EOL;

function someFuntion1() {
    $string = "sub program string" . PHP_EOL;

    echo $string;
}

echo $string;
someFuntion1();
echoLn("----------END EXAMPLE 10.1 ----------------");

//--------------------------------------------


$string = "program string" . PHP_EOL;

function someFuntion2() {
    global $string;

    echo $string;
}

echo $string;
someFuntion2();
echoLn("----------END EXAMPLE 10.2 ----------------");

//---------------------------------

$string1 = "program string1" . PHP_EOL;
$string2 = "program string2" . PHP_EOL;
$string3 = "program string3" . PHP_EOL;

function someFuntion3() {
    $string2 = "sub program string" . PHP_EOL;
    global $string3;
    function someSubFunction() {
        global $string1;
        global $string2;
        global $string3;

        echo $string1;
        echo $string2;
        echo $string3;
    }

    someSubFunction();
}
echo $string1;
echo $string2;
echo $string3;
echoLn("");
someFuntion3();
echoLn("----------END EXAMPLE 10.3 ----------------");







// use recursion execution

function getFactorial($n) {
    if ($n == 1) {
        return $n;
    }

    return $n * getFactorial($n -1);
}

echo "10! = " . (10 * 9 * 8 * 7 * 6 * 5 * 4 * 3 * 2 * 1) . PHP_EOL;

echoLn("10! = " . getFactorial(10));

echoLn("----------END EXAMPLE 11 ----------------");


//arrays and function

function multAllNumbers(... $numbers) {
    $answer = 1;

    foreach ($numbers as $number) {
        $answer = $answer * $number;
    }

    return $answer;
}

echo "2*3*9 = " . (2 * 3 * 9) . PHP_EOL;
echoLn(multAllNumbers(2, 3, 9));
echoLn("----------END EXAMPLE 12.1 ----------------");

//----------------------------------------


function sumTwoOrMoreNumbers1($a, $b) {
    $arguments_count = func_num_args();

    $arguments = func_get_args();

    $sum = 0;

    for($index = 0; $index < $arguments_count; $index++) {
        $sum += $arguments[$index];
    }

    return $sum;
}


function sumTwoOrMoreNumbers2($a, $b) {
    $arguments_count = func_num_args();

    $sum = 0;

    for($index = 0; $index < $arguments_count; $index++) {
        $sum += func_get_arg($index);
    }

    return $sum;
}

echo "1+2 = " . (1 + 2) . PHP_EOL;
echoLn(sumTwoOrMoreNumbers1(1, 2));
echoLn(sumTwoOrMoreNumbers2(1, 2));
echoLn("");

echo "1+2+100 = " . (1 + 2 + 100) . PHP_EOL;
echoLn(sumTwoOrMoreNumbers1(1, 2, 100));
echoLn(sumTwoOrMoreNumbers2(1, 2, 100));
echoLn("----------END EXAMPLE 12.2 ----------------");
//----------------------------------------------



function getSumAndMult($a, $b) {
    return [$a + $b, $a * $b];
}
echo "3+2 = 5; 3*2 = 6" . PHP_EOL;

$result = getSumAndMult(3,2);

echoLn("3+2 = " . $result[0] . "; 3*2 = " . $result[1]);
echoLn("----------END EXAMPLE 12.3 ----------------");

echo "3+4 = 7; 3*4 = 12" . PHP_EOL;
list($sum, $mult) = getSumAndMult(3,4);
echoLn("3+4 = " . $sum . "; 3*4 = " . $mult);
echoLn("----------END EXAMPLE 12.4 ----------------");

//----------------------------------------------


//anonymous function and different calls

$a = function($a) {
    echo "$a given" . PHP_EOL;
};


$value = 100;

echo "100 geven" . PHP_EOL;
$a(100);

(function($a) {
    echo "$a given" . PHP_EOL;
})(100);
echoLn("----------END EXAMPLE 13.1 ----------------");


function sayGiven($a) {
    echo "$a given" . PHP_EOL;
}
echo "200 geven" . PHP_EOL;
$funcName = 'sayGiven';
$funcName(200);
echoLn("----------END EXAMPLE 13.2 ----------------");

class TestClass {
    public static function sayGivenStatic($a) {
        echo "$a given" . PHP_EOL;

    }

    public function sayGiven($a) {
        echo "$a given" . PHP_EOL;
    }








    public static $sayGivenStatic = "it is static value";
    public $sayGiven = 'it is field value';
}


echo "300 geven" . PHP_EOL;

$funcStaticName = 'sayGivenStatic';
TestClass::$funcStaticName(300);

$funcName = 'sayGiven';
$obj = new TestClass();
$obj->$funcName(300);
echoLn("----------END EXAMPLE 13.3 ----------------");

$fieldStaticName = 'sayGivenStatic';
$fieldName = 'sayGiven';

echoLn(TestClass::$$fieldStaticName);
echoLn($obj->{$fieldName});
echoLn("----------END EXAMPLE 13.4 ----------------");



// Type hints

interface LivedWithMom {

}

class GrandFather {
}

class Father extends GrandFather implements LivedWithMom{

}

class Son extends Father {

}

$objects = [
    "stdObject" => new StdClass(),
    "grandFather" => new GrandFather(),

    "father" => new Father(),

    "son" => new Son(),

    "livedWithMomFather" => new Father(),
    "livedWithMomSon" => new Son(),

];

$functions = [
    'sayStdClassClass' => function (StdClass $obj) {
        return get_class($obj);
    },

    'sayGrandFatherClass' => function (GrandFather $obj) {
        return get_class($obj);
    },

    'sayFatherClass' => function (Father $obj) {
        return get_class($obj);
    },

    'saySonClass' => function (Son $obj) {
        return get_class($obj);
    },

    'sayLivedWithMom' => function (LivedWithMom $obj) {
        return get_class($obj);
    },
];


foreach($functions as $fName => $func) {
    foreach ($objects as $oName => $object) {
        try {
            echoLn("try call $fName($ $oName) ... ");
            echoLn("RESULT:");

            echoLn($func($object));
        } catch (TypeError $e) {
            echoLn($e->getMessage());
        }

        echoLn("");
        echoLn("");
        echoLn("");
    }
}


echoLn("----------END EXAMPLE 14.1 ----------------");


function execWithTry($fName, ... $args) {
    try {
        call_user_func_array($fName, $args);
    } catch (TypeError $e) {
        echo $e->getMessage() . PHP_EOL;
    }
}


function printValues(int $integer, float $float, string $string) {
    echo "integer $integer, and float $float, and string $string" . PHP_EOL;
}

echo "integer 10, and float 0.5, and string -=-" . PHP_EOL;

execWithTry('printValues', 10, 0.5, "-=-");


echo "integer 10, and float 5, and string -=-" . PHP_EOL;

execWithTry('printValues', 10, 5, "-=-");


echo "integer 10.0, and float 0.5, and string -=-" . PHP_EOL;

execWithTry('printValues', 10.0, 0.5, "-=-");
echoLn("----------END EXAMPLE 14.2 ----------------");




//links

class Man {
    protected $name = 'noname';

    public function getName() {
        return $this->name;
    }

    public function &getLinkToName() {
        return $this->name;
    }

    public function changeStatus(&$status) {
        $status = "OLD";
    }
}

$status = "NEW";

$obj = new Man();
$linkName = &$obj->getLinkToName();
$linkName = 'alex';

echo "name: alex" . PHP_EOL;
echo "name: " . $obj->getName() . PHP_EOL;
echoLn("----------END EXAMPLE 15.1 ----------------");

$obj->changeStatus($status);

echo "status: OLD" . PHP_EOL;
echo "status: $status" . PHP_EOL;