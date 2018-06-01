<?php
error_reporting(E_ALL);

/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 19.04.2018
 * Time: 18:49
 */

$aNull = null;
$aS = "";

$bTrue =true;
$bI = 1;

echo "aNull=" . $aNull . PHP_EOL;
echo "aS=". $aS . PHP_EOL;
echo "bTrue=" . $bTrue . PHP_EOL;
echo "bI=". $bI . PHP_EOL;

echo "======================" . PHP_EOL
    . PHP_EOL. PHP_EOL. PHP_EOL. PHP_EOL;

var_dump($aNull);
var_dump($aS);
var_dump($bI);
var_dump($bTrue);

$a = print_r($bTrue); //print to screen
$a = print_r($bI, true);//return (not print to screen)
var_dump($a);

echo "======================" . PHP_EOL
    . PHP_EOL. PHP_EOL. PHP_EOL. PHP_EOL;

$dd1 = null;
$dd2 = false;
$dd3 = "";
$dd4 = 10;

$ddd = $dd1;

var_dump(isset($dd1));
var_dump(isset($dd2));
var_dump(isset($dd3));
var_dump(isset($dd4));
var_dump(isset($ddd));

echo "======================" . PHP_EOL
    . PHP_EOL. PHP_EOL. PHP_EOL. PHP_EOL;

$dd1 = null;
$dd2 = false;
$dd3 = "";
$dd4 = 10;
$dd5 = true;
$dd6 = 00;
$dd7 = "00";

$ddd = $dd1;

var_dump(empty($dd1));
var_dump(empty($dd2));
var_dump(empty($dd3));
var_dump(empty($dd4));
var_dump(empty($dd5));
var_dump(empty($dd6));
var_dump(empty($dd7));
var_dump(empty($ddd));


echo "======================" . PHP_EOL
    . PHP_EOL. PHP_EOL. PHP_EOL. PHP_EOL;

$many = 20;

$text = 'apple';

if ($many == 1) {
} else {
    $text = $text . 's';
}
//тернарный оператор
// (условие) ? "знач.истины" : "знач.лжи";

$text = $text . (
    ($many == 1) ? "" : "s"
    );

// $a = $b + $c ;

if (isset($c)) {
    $a = $b + $c;
} else {
    $a = $b + 0;
}

$a = $b + (isset($c)) ? $c : 0 +3;

//(isset($c)) ? $c : 0
//(isset($c)) ? $c : ""

$a = (isset($c)) ?: 10;
$a = (isset($c)) ? $c : 10;

//приоритеты операторов
$a = $b + $d * $e;

$a = 10;
$b = 20;
$c = 0;
if ($b = $c) {
    echo 'a/b=' . ($a / $b) . PHP_EOL;
} else {
    echo 'b=0, we can not divide by zero' . PHP_EOL;
}



