<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 19:33
 * 26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
    Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
    индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
    индекс.
 */
$array = [];

$multNumber = 1;

echo 'получений массив: '.PHP_EOL;
for($i=0; $i<15; $i++){
    array_push($array, rand(0,100));
    echo $array[$i].' ';
    if($array[$i]>0 && ($i%2==0)){
        $multNumber *= $array[$i];
    }
}
echo PHP_EOL;
echo 'произведение чисел с парным индексом: '. $multNumber.PHP_EOL;
echo 'числа у которых не парный индекс: '.PHP_EOL;

for ($i=1; $i<15; $i=$i+2){
    echo $array[$i].' ';
}
echo PHP_EOL;