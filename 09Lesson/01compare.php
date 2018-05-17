<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.05.18
 * Time: 10:46
 */


function f1(array $array) {
    $array = array_flip($array);


    array_walk($array, function(&$value, $key) {
        $value = (is_string($key))? mb_strlen($key) : 0;
    });

    arsort($array);

    return $array;
}

function f2(array $array) {
    $array = array_flip($array);

    foreach($array as $key => &$value) {
        $value = (is_string($key))? mb_strlen($key) : 0;        
    }
    
    arsort($array);

    return $array;
}


function f3(array $array) {
    $array = array_flip($array);

    uksort($array, function($key1, $key2) {
        $len1 = mb_strlen($key1);
        $len2 = mb_strlen($key2);
        
        return ($len1 === $len2) ? 0 : (($len1 > $len2)? -1 : 1);
    });
    return $array;
}


function f4(array $array) {
    $array = array_flip($array);

    uksort($array, function($key1, $key2) {
        return (mb_strlen($key1) === mb_strlen($key2)) ? 0 : ((mb_strlen($key1) > mb_strlen($key2))? -1 : 1);
    });
    return $array;
}


$a = 'some thing in the dark, go ahead. do not worry about anything else excluding your sleep time';

$str = 'hi!is it a good thing,or it is bad, or may be.';
$str = 'Привет!Это хорошая вещь,или это плохая, а может.';

$str1 = preg_replace('/\\W/u', ' ', $str);

$arr = preg_split('/\\s/u', $str1, -1, PREG_SPLIT_NO_EMPTY);

var_dump($arr);

$arr = preg_split('/\\b\\W*/u', $str, -1, PREG_SPLIT_NO_EMPTY);

var_dump($arr);






$chars = 'qazxswedcvfrtgbnhyujmkilop';
$charMax = strlen($chars) - 1;


$time = microtime(true);

$array = [];
for($i = 0; $i < 1000000; $i++) {
    $len = mt_rand(1,10);
    
    $str = '';
    
    for($j = 0; $j < $len; $j++) {
        $str .= $chars[mt_rand(0, $charMax)];
    }
    
    $array[] = $str;
}

echo 'GENERATE - ' . (microtime(true) - $time) . PHP_EOL;
$time = microtime(true);

f1($array);
echo 'MODE1 - ' . (microtime(true) - $time) . PHP_EOL;
$time = microtime(true);

f2($array);
echo 'MODE2 - ' . (microtime(true) - $time) . PHP_EOL;
$time = microtime(true);

f3($array);
echo 'MODE3 - ' . (microtime(true) - $time) . PHP_EOL;
$time = microtime(true);

f4($array);
echo 'MODE4 - ' . (microtime(true) - $time) . PHP_EOL;
$time = microtime(true);