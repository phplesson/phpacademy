<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21.04.18
 * Time: 9:50
 */

$a = 10;
$b = 'a';

echo $$b . PHP_EOL;

$line = 'line1';

goto line1;

echo "no echo" . PHP_EOL;

line1: echo "hello" . PHP_EOL;

$strCode = 'echo "some cool text" . PHP_EOL;';
eval($strCode);


$mode = "mode1";
switch($mode) {
    case "mode1" :
        echo "current mode2";
        break;
    case "mode2" :
    case "mode3" :
        echo "current mode 2 or 3";
        break;
    default :
        echo "no way";
}
echo PHP_EOL;