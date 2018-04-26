<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/25/18
 * Time: 5:19 PM
 */
/*
 * 20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.
 * x
 * xx
 * xxx
 * xxxx
 * xxxxx
 * */

$number_of_rows=20; //количество строк
$number_of_symbols=1; //количество символов в строке - вначале 1, потом в цикле будем увеличивать до кол-ва строк
for ($i=1; $i<=$number_of_rows; $i++) {
    for ($j=1; $j<=$number_of_symbols; $j++) {
        echo "x";
    }
    $number_of_symbols+=1;
    echo PHP_EOL;
}
