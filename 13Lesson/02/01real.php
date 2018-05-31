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
$o = @$argv[2];
$b = @$argv[3];

if ($o == '+') {
    $result = add($a, $b);
} else if ($o == '-') {
    $result = sub($a, $b);
} else {
    $result = getZero();
}

echo "a{$o}b = " . print_r($result, true) . PHP_EOL;