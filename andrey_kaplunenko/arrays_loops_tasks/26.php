<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/26/18
 * Time: 7:20 AM
 */
/*
 * 26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
 * Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы.
 * После вывести на экран элементы, которые больше ноля и у которых не парный индекс.
 * */

$rand_array = [];
//Циклом for инициализируем массив на 10 ячеек и заполним их случайными числами. Случайные числа будем брать в диапазоне от 0 до 100
for ($i=0; $i<10; $i++) {
    $rand_array[$i] = rand(0, 100);
}

//Вычисляем произведение положительных элементов с парными индексами:
$even_mult = 1; //в этой переменной будем накапливать результат умножения, а пока присвоим 1, чисто для инициализации, на результат умножения как известно 1 не влияет
for ($i=0; $i<10; $i+=2) { //проходимся по четным индексам 0, 2, 4...
    if ($rand_array[$i]>0)
        $even_mult*=$rand_array[$i];
}

//Выведем исходный массив в строчку:
echo 'Initial array: ';
for ($i=0; $i<10; $i++) {
    echo "$rand_array[$i]".", ";
}
echo PHP_EOL;

//Также выведем результат умножения:
echo 'Multiplication result: '.$even_mult.PHP_EOL;

//Теперь выведем на экран положительные элементы у которых не парные индексы:
echo 'Only odd positive elements: ';
for ($i=1; $i<10; $i+=2) {
    echo "$rand_array[$i]".", ";
}
echo PHP_EOL;