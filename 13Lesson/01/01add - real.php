<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 11:45
 */

include_once('real.php');

$values = $argv;

$a = @$argv[1];
$b = @$argv[2];

$result = add($a, $b);

echo 'a+b = ' . print_r($result, true) . PHP_EOL;