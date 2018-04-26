<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 26.04.18
 * Time: 16:15
 */

include('include/no-exists.file');


echo str_repeat(PHP_EOL, 3);

$a = $b;


echo str_repeat(PHP_EOL, 3);

$array = [];

echo $array[2];


echo str_repeat(PHP_EOL, 3);

define('MY_CONST', 'MY_VALUE');
define('MY_CONST', 'ANOTHER_VALUE');


echo str_repeat(PHP_EOL, 3);

mysqli_connect('somehost', 'someuser', 'somepassword');


echo str_repeat(PHP_EOL, 3);

$a = 0;
$b = 100;

if ($a == 0) {
//    trigger_error('can not divide by zero', E_USER_ERROR);
    trigger_error('can not divide by zero', E_USER_NOTICE);
} else {
    echo 'a/b = ' . ($a / $b) . PHP_EOL;
}

echo str_repeat(PHP_EOL, 3);

echo 'Bye' . PHP_EOL;