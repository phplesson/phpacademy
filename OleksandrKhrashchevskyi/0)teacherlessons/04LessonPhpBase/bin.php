<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 26.04.2018
 * Time: 19:13
 */
$l1 = 0b0101;
$l2 = 0b1001;

function decbinr($value) {
    return sprintf('%\'032b', $value);
}

echo decbinr($l1) . '    l1' . PHP_EOL;
echo decbinr($l2) . '    l2' . PHP_EOL;
echo decbinr(~$l2) . PHP_EOL;
echo decbinr(~$l1) . PHP_EOL;
echo decbinr($l1 & $l2) . PHP_EOL;
echo decbinr($l1 | $l2) . PHP_EOL;
echo decbinr($l1 ^ $l2) . PHP_EOL;
echo decbinr(~($l1 ^ $l2)) . PHP_EOL;


$a = 0b00110;
$b = 0b01010;

$result = ~($a ^ $b);

function ff($f1, $f2, $f3,  ...$fAllOther) {
    $params = func_get_args();
}

$data = [1, 22];

$f = function() {return true;};


call_user_func_array('ff', $data);
$r = call_user_func_array($f, $data); //true

