<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 15.04.18
 * Time: 23:23
 *
 *
 *
 * 1 - посчитать сопротивление схемы
 *
 *    ---Р1(a)---Р2(b)-
 *      |              |
 *   ------Р3(c)-------
 * */

$options = getopt('a:b:c:');
$a = $options['a'];
$b = $options['b'];
$c = $options['c'];

if($a == 0 and $b == 0 and $c ==0){
    $abc = "Warning! Please enter another resists!". PHP_EOL;
} else{
    $abc=($a+$b)*$c/($a+$b+$c). PHP_EOL;
}

echo $abc;
