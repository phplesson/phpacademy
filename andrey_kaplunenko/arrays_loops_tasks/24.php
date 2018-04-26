<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/25/18
 * Time: 10:14 PM
 */
/*
 * 24. Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть выбранной вами цифры в
 * выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза.
 * */

if ($argc==3) {
    if (is_numeric ($argv[1]) && is_numeric ($argv[2])) {
        $digit = (int)$argv[1];
        $long_number_string = (string)$argv[2];
        $stringLength=strlen($long_number_string);
        $count = 0; //счетчик, в котором будем накапливать количество вхождений
        for ($i=0; $i<$stringLength; $i++) {
            if ($long_number_string[$i] == $digit) {
                $count+=1;
            }
        }
        echo "You looked for digit: ".$digit.". This digit found ".$count." times.".PHP_EOL;

    } else echo "Argument(s) is not numeric.".PHP_EOL;
} else echo "Error with args. How to use:".PHP_EOL.">php 24.php [digit_to_find] [number_where_to_find]".PHP_EOL;