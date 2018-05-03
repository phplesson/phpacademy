<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 30.04.18
 * Time: 10:53
 */

$array = include('02lib.php');

echo "<p>{$array['text']}</p>" . PHP_EOL;

$generator = $array['paramGenerator'];

$params = $generator();

echo "<p>current params</p>" . PHP_EOL;
echo "<pre>" . PHP_EOL;
var_dump($params);
echo "<pre>" . PHP_EOL;


$result = call_user_func_array($array['func'], $params);


echo "<span>result: $result</span>" . PHP_EOL;