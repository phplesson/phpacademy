<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 17:25
 *
 * 14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
 * проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
 * выведите на экран 'Есть!', иначе выведите 'Нет!'
 */

$options= getopt('e:');
$e = $options['e'];

$counter = 0;
echo 'Введите число для проверки'.PHP_EOL;

$array = [4, 2, 5, 19, 13, 0 ,10];

foreach ($array as $cycle){
    if($cycle == $e){
        $counter++;
    }
}

if($counter>0){
    echo 'Число: '. $e.' ЕСТЬ!'.PHP_EOL;
}
else
    echo 'Числа: '. $e.' НЕТ!'.PHP_EOL;