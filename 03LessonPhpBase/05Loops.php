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
//ob_end_flush();
//$longtext = ob_get_clean();
//$text2 = ob_get_flush();

print_r($arrayInfoFilter);


foreach ($arrayInfoFilter as $arrayItemValue) {
    echo '$arrayItemValue: ' . $arrayItemValue . PHP_EOL;
}



echo PHP_EOL . PHP_EOL . PHP_EOL;


$array2 = [
    3 => '33',
    1 => '11',
    22=> '2222',
];

foreach ($array2 as $arrayItemValue) {
    echo '$array2: ' . $arrayItemValue . PHP_EOL;
}

echo PHP_EOL . PHP_EOL . PHP_EOL;





print_r($arrayInfo);

foreach ($arrayInfo as $itemIndex => $itemValue) {
    echo '$itemIndex: ' . $itemIndex . '     $itemValue: ' . (is_array($itemValue)? 'array' : $itemValue) . PHP_EOL;
}

echo PHP_EOL . PHP_EOL . PHP_EOL;

//$values = array_values($arrayInfo);
//$keys = array_keys($arrayInfo);
//
//print_r($values);
//print_r($keys);


foreach ($arrayInfo as $itemIndex => $itemValue) {
    printf('$itemIndex: %15s    $itemValue: %15.15s |%s',
        $itemIndex,
        (is_array($itemValue)? 'array' : $itemValue),
        PHP_EOL);
    $itemValue = 1;
}

echo PHP_EOL . PHP_EOL . PHP_EOL;
