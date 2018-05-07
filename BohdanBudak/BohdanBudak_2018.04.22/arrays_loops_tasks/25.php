<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 25.04.2018
 * Time: 12:20
 */
/** Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами. */

for ($i = 0; $i <= 10; $i++){
   $random [] = rand(1,100);
}
print_r($random);
$maxValue = max($random);
$minValue = min($random);
$max = array_search($maxValue, $random);
$min = array_search($minValue, $random);

$random[$max] = $minValue;
$random[$min] = $maxValue;

print_r($random);

