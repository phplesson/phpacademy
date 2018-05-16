<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 14.05.18
 * Time: 14:34
 */


$task = include('functions_forms_tasks/6.php');

echo "<p>{$task['text']}</p>" . PHP_EOL;

$generator = $task['paramGenerator'];
$func = $task['func'];

$params = $generator();


echo "<p>current params</p>" . PHP_EOL;
echo "<pre>" . PHP_EOL;
var_dump($params);
echo "<pre>" . PHP_EOL;

$result = call_user_func_array($task['func'], $params);
var_dump($result);

echo "<span>result: $result </span>" . PHP_EOL;