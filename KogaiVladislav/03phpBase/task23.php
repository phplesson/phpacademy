<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 18:52
 *
 *
 * 23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
    пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
    2, 3, т. е. 6.
 */

$options = getopt('a:');
$a = $options['a'];

$result = 0;

$numberArray = str_split($a);

foreach ($numberArray as $cycle){
    $result += is_numeric($cycle) ? intval($cycle) : 0;
}
echo 'Введеное число: '. $a.PHP_EOL;
echo 'Сумма цифр: '. $result.PHP_EOL;
