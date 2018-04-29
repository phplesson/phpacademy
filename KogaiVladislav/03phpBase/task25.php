<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 19:19
 * 25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
    найти максимальное и минимальное значение и поменять их местами.
 */
//Берем рандомные числа от 0 до 100

$array = [];

$maxNumber = 0;
$minNumber = 100;

echo 'получений массив: '.PHP_EOL;
for($i=0; $i<10; $i++){
    array_push($array, rand(0,100));
    echo $array[$i].' ';
    if($maxNumber < $array[$i]){
        $maxNumber = $array[$i];
        $maxNumberIndex = $i;
    }
    if($minNumber > $array[$i]){
        $minNumber = $array[$i];
        $minNumberIndex = $i;
    }
}

echo PHP_EOL;
echo 'Максимальное число: '. $maxNumber. ', и имеет индекс(в массиве): '. $maxNumberIndex.PHP_EOL;
echo 'Минимальное число: '. $minNumber. ', и имеет индекс(в массиве): '. $minNumberIndex.PHP_EOL;

$array[$maxNumberIndex] = $minNumber;
$array[$minNumberIndex] = $maxNumber;

echo 'Массив с поменяными элементами: '.PHP_EOL;
foreach ($array as $cycle){
    echo $cycle. ' ';
}
echo PHP_EOL;
