<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 13:12
 */

include_once('checker.php');
include_once('real.php');
include_once('complex.php');


$values = $argv;

$p1 = @$argv[1];
$o = @$argv[2];
$p2 = @$argv[3];

$current = '';
if ($current == '') {
    error_clear_last();
    $a = @\Real\getFromStr($p1);
    $b = @\Real\getFromStr($p2);

    if (error_get_last() === null) {
        $current = '\\Real\\';
    }
}

if ($current == '') {
    error_clear_last();
    $a = @\Complex\getFromStr($p1);
    $b = @\Complex\getFromStr($p2);

    if (error_get_last() === null) {
        $current = '\\Complex\\';
    }
}

if ($current == '') {
    echo 'Bad call' . PHP_EOL;
    exit();
}

if ($o == '+') {
    $func = $current . 'add';
    $result = $func($a, $b);
} else if ($o == '-') {
    $func = $current . 'sub';
    $result = $func($a, $b);
} else {
    $func = $current . 'getZero';
    $result = $func();
}

echo "a{$o}b = " . print_r($result, true) . PHP_EOL;