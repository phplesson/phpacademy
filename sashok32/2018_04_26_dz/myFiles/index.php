<?php

if (php_sapi_name() === 'cli') {
    define('EOL', PHP_EOL);
} else {
    define('EOL', '<br />');
}

$array = include('test.php');
echo "Название функции: ".$array['text'].EOL;
echo "Число аргументов: ".$array['paramCount'].EOL;
$generator = $array['paramGenerator'];
$params = $generator();
echo "Введенные аргументы: ".$params[0].' | '.$params[1].EOL;
$result = call_user_func_array($array['func'], $params);
echo "Результат: ".$result.EOL;
echo "=====================================================".EOL;

$array = include('1.php');
echo "Название функции: ".$array['text'].EOL;
echo "Число аргументов: ".$array['paramCount'].EOL;
$generator = $array['paramGenerator'];
$params = $generator();
echo "Введенные аргументы: ".$params[0].' | '.$params[1].EOL;
$result = call_user_func_array($array['func'], $params);
echo "Результат: ".print_r($result, true).EOL;
echo "=====================================================".EOL;

$array = include('2.php');
echo "Название функции: ".$array['text'].EOL;
echo "Число аргументов: ".$array['paramCount'].EOL;
$generator = $array['paramGenerator'];
$params = $generator();
echo "Введенные аргументы: ".$params[0].EOL;
$result = call_user_func_array($array['func'], $params);
echo "Результат: ".$result.EOL;
echo "=====================================================".EOL;


$array = include('4.php');
echo "Название функции: ".$array['text'].EOL;
echo "Число аргументов: ".$array['paramCount'].EOL;
$generator = $array['paramGenerator'];
$params = $generator();
echo "Введенные аргументы: ".$params[0].EOL;
$result = call_user_func_array($array['func'], $params);
echo "Результат: <pre>".print_r($result, true).EOL;
echo "</pre>=====================================================".EOL;

/* $array = array ();
$array = include('2.php');
echo "Function description: ".$array['text'].EOL;
echo "Number of arguments: ".$array['paramCount'].EOL;
$parameters = call_user_func($array['paramGenerator']);
echo "Generated input parameter(s): ".print_r($parameters, true).EOL;
$result = call_user_func_array($array['func'], $parameters);
echo "Result: ".$result.EOL;
echo "=====================================================".EOL;

$array = array ();
$array = include('3.php');
echo "Function description: ".$array['text'].EOL;
echo "Number of arguments: ".$array['paramCount'].EOL;
$parameters = call_user_func($array['paramGenerator']);
echo "Generated input parameter(s): ".print_r($parameters, true).EOL;
$result = call_user_func_array($array['func'], $parameters);
echo "Result: ".$result.EOL;
echo "=====================================================".EOL;

$array = array ();
$array = include('9.php');
echo "Function description: ".$array['text'].EOL;
echo "Number of arguments: ".$array['paramCount'].EOL;
$parameters = call_user_func($array['paramGenerator']);
echo "Generated input parameter(s): ".print_r($parameters, true).EOL;
$result = call_user_func_array($array['func'], $parameters);
echo "Result: ".$result.EOL;
echo "=====================================================".EOL;

$array = array ();
$array = include('10.php');
echo "Function description: ".$array['text'].EOL;
echo "Number of arguments: ".$array['paramCount'].EOL;
$parameters = call_user_func($array['paramGenerator']);
echo "Generated input parameter(s): ".print_r($parameters, true).EOL;
$result = call_user_func_array($array['func'], $parameters);
echo "Result: ".$result.EOL;
echo "=====================================================".EOL;

$array = array ();
$array = include('11.php');
echo "Function description: ".$array['text'].EOL;
echo "Number of arguments: ".$array['paramCount'].EOL;
$parameters = call_user_func($array['paramGenerator']);
echo "Generated input parameter(s): ".print_r($parameters, true).EOL;
$result = call_user_func_array($array['func'], $parameters);
echo "Result: ".$result.EOL;
echo "=====================================================".EOL;

$array = array ();
$array = include('12.php');
echo "Function description: ".$array['text'].EOL;
echo "Number of arguments: ".$array['paramCount'].EOL;
$parameters = call_user_func($array['paramGenerator']);
echo "Generated input parameter(s): ".print_r($parameters, true).EOL;
$result = call_user_func_array($array['func'], $parameters);
echo "Result: ".$result.EOL;
echo "=====================================================".EOL;

$array = array ();
$array = include('13.php');
echo "Function description: ".$array['text'].EOL;
echo "Number of arguments: ".$array['paramCount'].EOL;
$parameters = call_user_func($array['paramGenerator']);
echo "Generated input parameter(s): ".print_r($parameters, true).EOL;
$result = call_user_func_array($array['func'], $parameters);
echo "Result: ".$result.EOL;
echo "=====================================================".EOL;
 */
 
 ?>