<?php
//Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand). Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы. После вывести на экран элементы, которые больше ноля и у которых не парный индекс.

$randomValues = array();
$multiplicationOfEvenIndexes = 0;
$evenIndexes = array();

for ($i =0; $i <= 15; $i++) {

    $randomValues[] = rand(1,100);

}

foreach ($randomValues as $key => $value) {

if ($key > 0 && ($key % 2) == 0) {

    $evenIndexes[$key] = $value;

}

foreach ($evenIndexes as $evenIndexValue){
    if($multiplicationOfEvenIndexes == 0){
        $multiplicationOfEvenIndexes = $evenIndexValue;
    } else {
    $multiplicationOfEvenIndexes = $multiplicationOfEvenIndexes * $evenIndexValue; }
    echo $multiplicationOfEvenIndexes.PHP_EOL;
}
}

print_r($evenIndexes);
print_r($multiplicationOfEvenIndexes);