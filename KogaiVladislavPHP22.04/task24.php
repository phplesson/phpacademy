<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 19:07
 *
 * 24. Вам нужно разработать программу, которая считала бы количество вхождений
    какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
    442158755745 встречается 4 раза.
 */

$options = getopt('a:');
$a = $options['a'];

define('DEFAULT_NUM', 442158755745);

$numArray = str_split(DEFAULT_NUM);

$counter = 0;

foreach ($numArray as $cycle){
    if($cycle == $a){
        $counter++;
    }
}
echo 'Цифра встречается '. $counter. ' раз(-a)!'.PHP_EOL;