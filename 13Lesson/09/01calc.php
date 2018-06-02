<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 15:12
 */

$config = include_once('autoload.php');

$values = $argv;

$p1 = @$argv[1];
$o = @$argv[2];
$p2 = @$argv[3];

/* @var $a Operand */
$a = null;
/* @var $b Operand */
$b = null;

foreach ($config as $name => $class) {
    /* @var $class Operand */
    $a = $class::getFromStr($p1);
    $b = $class::getFromStr($p2);
    
    if ($a !== null && $b !== null) {
        break;
    }
    
    $a = $b = null;
}

if ($a === null || $b === null) {
    echo 'bad call' . PHP_EOL;
    exit();
}

if ($o == '+') {
    $result = $a->add($b, false);
} else if ($o == '-') {
    $result = $a->sub($b, false);
} else {
    $result = call_user_func([$a, 'getZero']);
}

echo "$a   $o   $b   =   $result" . PHP_EOL;