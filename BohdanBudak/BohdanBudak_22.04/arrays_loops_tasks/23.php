<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 25.04.2018
 * Time: 12:20
 */
/** Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
2, 3, т. е. 6. */

$options = getopt("a:");
$a = $options['a'];
$result = 0;
$arr = str_split($a);
echo "Введенное число - $a".PHP_EOL;
    if(is_numeric($a)) {
        $result = array_sum($arr);
        echo "Сумма чисел = $result".PHP_EOL;
    } else {
        echo "Error!";
}
