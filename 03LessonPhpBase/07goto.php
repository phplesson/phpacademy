<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21.04.18
 * Time: 9:50
 */

$a = 10;
$b = 'a';
$c = 'b';
$d = 'c';
echo $$$$d . PHP_EOL;


$line = 'line1';


goto line1;

echo "no echo" . PHP_EOL;

line1: echo "hello" . PHP_EOL;


$strCode = 'echo "some cool text" . PHP_EOL;';
eval($strCode);
echo PHP_EOL;
echo PHP_EOL;

$mode = "mode2";
$mode = "12mode2";
switch($mode) {
    case 12 :
        echo "current mode 12";
        break;
    case "mode1" :
        echo "current mode1";
        break;
    case "mode2" :
        echo "some text" . PHP_EOL;
    case "mode3" :
        echo "current mode 2 or 3";
        break;
    default :
        echo "no way";
}
echo PHP_EOL;

exit();