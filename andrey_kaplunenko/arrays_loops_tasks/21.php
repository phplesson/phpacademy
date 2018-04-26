<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/25/18
 * Time: 9:34 PM
 */
/*
 * 21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.
 * 1
 * 22
 * 333
 * 4444
 * 55555
 * */
$number_of_rows = 9; //количество рядов
$number_of_symbols=1; //количество символов в строке - вначале 1, потом в цикле будем увеличивать до кол-ва строк
for ($i=1; $i<=$number_of_rows; $i++) {
    for ($j=1; $j<=$number_of_symbols; $j++) {
        echo $i;
    }
    $number_of_symbols+=1;
    echo PHP_EOL;
}
