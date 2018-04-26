<?php
//Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами.

$randomValues = array();

for ($i =0; $i <= 15; $i++) {

    $randomValues[] = rand(1,100);

}
echo 'Array before:'.PHP_EOL;
print_r($randomValues);

$maxValue = max($randomValues);
$minValue = min($randomValues);

$maxKey = array_search($maxValue, $randomValues);
$minKey = array_search($minValue, $randomValues);

$randomValues[$maxKey] = $minValue;
$randomValues[$minKey] = $maxValue;

echo 'Array after:'.PHP_EOL;
print_r($randomValues);
