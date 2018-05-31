<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 12:39
 */


include_once('complex.php');

$values = $argv;

$a = @$argv[1];
$b = @$argv[2];

$a = explode('i', $a);
$b = explode('i', $b);
$a = ['re' => $a[0], 'im' => $a[1]];
$b = ['re' => $b[0], 'im' => $b[1]];


$result = add($a, $b);

echo 'a+b = ' . print_r($result, true) . PHP_EOL;