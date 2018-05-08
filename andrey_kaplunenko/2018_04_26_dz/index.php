<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/30/18
 * Time: 9:10 PM
 */
if (php_sapi_name() === 'cli') {
    define('EOL', PHP_EOL);
} else {
    define('EOL', '<br />');
}

$array = array ();
$array = include('1.php');
echo "Function description: ".$array['text'].EOL;
echo "Number of arguments: ".$array['paramCount'].EOL;
$parameters = call_user_func($array['paramGenerator']);
echo "Generated input parameter(s): ".print_r($parameters, true).EOL;
$result = call_user_func_array($array['func'], $parameters);
echo "Result: ".$result.EOL;
echo "=====================================================".EOL;

$array = array ();
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
$array = include('4.php');
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
