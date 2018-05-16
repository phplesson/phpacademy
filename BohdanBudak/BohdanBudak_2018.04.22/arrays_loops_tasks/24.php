<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 25.04.2018
 * Time: 12:20
 */
/** Вам нужно разработать программу, которая считала бы количество вхождений
какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
442158755745 встречается 4 раза. */

$options = getopt("a:b:");
$a = $options['a'];
$b = $options['b'];
$arr = str_split($a);
echo "Введенное число - $a".PHP_EOL;
echo "Заданная цифра - $b".PHP_EOL;
$counter = 0;
foreach($arr as $item){
    if(is_numeric($a) && is_numeric($b) && $item == $b) {
        $counter++;
    }
}echo "Цифра $b в числе $a встречаеться  $counter раз(а)".PHP_EOL;
