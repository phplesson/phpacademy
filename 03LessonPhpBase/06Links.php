<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21.04.18
 * Time: 6:53
 */

$a = 10;
$b = $a;
$c = $b;
$d = $c;
$b++;
$c--;

var_dump([$a, $b, $c, $d]);
echo PHP_EOL . PHP_EOL . PHP_EOL;

$a = 10;
$b = $a;
$c = $b;
$d = &$c;
$b++;
$c--;

var_dump([$a, $b, $c, $d]);
echo PHP_EOL . PHP_EOL . PHP_EOL;

$a = 10;
$b = &$a;
$c = &$b;
$d = &$c;
$b++;
$c--;

var_dump([$a, $b, $c, $d]);
echo PHP_EOL . PHP_EOL . PHP_EOL;