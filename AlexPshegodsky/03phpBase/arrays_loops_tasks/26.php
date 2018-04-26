<?php
//Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand). Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы. После вывести на экран элементы, которые больше ноля и у которых не парный индекс.

$randomValues = array();
$multiplicationOfEvenIndexes = 1;
$evenIndexes = array();
$oddIndexes = array();

for ($i = 0; $i <= 15; $i++) {

    $randomValues[] = rand(1, 100);

}

foreach ($randomValues as $key => $value) {

    if ($value > 0 && ($key % 2) == 0) {
        $evenIndexes[$key] = $value;
        $multiplicationOfEvenIndexes *= $value;
    }

    if ($value > 0 && ($key % 2) != 0) {
        $oddIndexes[$key] = $value;
    }


}
echo "---------------------------".PHP_EOL;
echo "Массив с парными индексами:".PHP_EOL;
print_r($evenIndexes);
echo "---------------------------".PHP_EOL;
echo "Результат перемножения элементов массива с пасными индексами:".PHP_EOL;
print_r($multiplicationOfEvenIndexes.PHP_EOL);
echo "---------------------------".PHP_EOL;
echo "Массив с не парными индексами:".PHP_EOL;
print_r($oddIndexes);