<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/25/18
 * Time: 9:42 PM
 */
/*
 * 22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
 * xx
 * xxxx
 * xxxxxx
 * xxxxxxxx
 * xxxxxxxxxx
 * */

$number_of_rows = 5; //количество рядов
$number_of_sym = 2; //начальное кол-во символов в ряду. в каждом следующем ряду будет на 2 больше чем в предыдущем.

for ($i=1; $i<=$number_of_rows; $i++) {
    for ($j=1; $j<=$number_of_sym; $j++) {
        echo "x";
    }
    $number_of_sym+=2;
    echo PHP_EOL;
}
