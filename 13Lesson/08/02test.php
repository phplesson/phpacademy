<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 01.06.18
 * Time: 9:02
 */

include_once('autoload.php');

function getInt($str) {
    return (is_numeric($str)) ? (int)$str : $str;
}

echo 'INPUT: <r|c> <value>' . PHP_EOL;

$type = @$argv[1];
$str = @$argv[2];

if ($type == 'r') {
    $obj = new Real(getInt($str));
} else if ($type == 'c') {
    @list($re, $im) = @explode('i', $str);
    
    $obj = new Complex(getInt($re), getInt($im));
}

echo 'result: ' . $obj . PHP_EOL;