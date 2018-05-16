<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/25/18
 * Time: 9:48 PM
 */
/*
 * 23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем.
 * Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
 * По желанию можете сделать проверку на корректность введения данных пользователем.
 * */
/*
 * Вызов программы из командной строки: php 23.php 123
 * */

if ($argc==2) {
    if (is_numeric ($argv[1])) {
        $str=(string)$argv[1]; //входную строку получаем как аргумент командной строки
        $stringLength=strlen($str);
        $sum=0;
        for ($i=0; $i<$stringLength; $i++)
            $sum=$sum+$str[$i];
        echo "Sum of digits = ".$sum."\n";
    } else echo "Argument is not numeric.".PHP_EOL;
} else echo "Error with args. Only ONE argument is supported.".PHP_EOL;