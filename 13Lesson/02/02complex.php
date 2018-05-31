<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 12:49
 */

include_once('complex.php');

$values = $argv;

$a = @$argv[1];
$o = @$argv[2];
$b = @$argv[3];

$a = explode('i', $a);
$b = explode('i', $b);
$a = ['re' => $a[0], 'im' => $a[1]];
$b = ['re' => $b[0], 'im' => $b[1]];


if ($o == '+') {
    $result = add($a, $b);
} else if ($o == '-') {
    $result = sub($a, $b);
} else {
    $result = getZero();
}

echo "a{$o}b = " . print_r($result, true) . PHP_EOL;