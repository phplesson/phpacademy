<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21.04.18
 * Time: 6:33
 */


ob_start();
include '01array.php';
ob_end_clean();

print_r($arrayInfoFilter);

foreach ($arrayInfoFilter as $arrayItemValue) {
    echo '$arrayItemValue: ' . $arrayItemValue . PHP_EOL;
}

echo PHP_EOL . PHP_EOL . PHP_EOL;





print_r($arrayInfo);

foreach ($arrayInfo as $itemIndex => $itemValue) {
    echo '$itemIndex: ' . $itemIndex . '     $itemValue: ' . (is_array($itemValue)? 'array' : $itemValue) . PHP_EOL;
}

echo PHP_EOL . PHP_EOL . PHP_EOL;

foreach ($arrayInfo as $itemIndex => $itemValue) {
    printf('$itemIndex: %15s    $itemValue: %15s |%s', $itemIndex, (is_array($itemValue)? 'array' : $itemValue), PHP_EOL);
}

echo PHP_EOL . PHP_EOL . PHP_EOL;