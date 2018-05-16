<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/24/18
 * Time: 11:04 PM
 */
/*
 * 14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if проверьте есть ли в массиве
 * элемент со значением $e, равном 2, 3 или 4. Если есть — выведите на экран 'Есть!', иначе выведите 'Нет!'.
 * */

$elements = [4, 2, 5, 19, 13, 0, 10];
$interesting_value_present = false;
foreach ($elements as $elements_value) {
    if ($elements_value==2 || $elements_value==3 || $elements_value==4) {
       $interesting_value_present = true;
       echo "Element [".$elements_value."] found in array!".PHP_EOL;
    }
}
if ($interesting_value_present == false) {
    echo "There are no interesting elements in array :(".PHP_EOL;
}