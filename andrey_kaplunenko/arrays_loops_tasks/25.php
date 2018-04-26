<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/25/18
 * Time: 10:32 PM
 */
/*
 * 25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
 * найти максимальное и минимальное значение и поменять их местами.
 * */

$rand_array = [];
//Циклом for инициализируем массив на 10 ячеек и заполним их случайными числами. Случайные числа будем брать в диапазоне от 0 до 100
//Почему такой маленький массив? Проверять легче :)
for ($i=0; $i<10; $i++) {
    $rand_array[$i] = rand(0, 100);
}

$max_element = $rand_array[0]; //в max_element будем временно хранить искомый МАКСИМУМ, но для начала присвоим max_element значение 0-го элемента массива
$max_element_index = 0; //индекс максимального элемента
$min_element = $rand_array[0]; //в min_element будем временно хранить искомый МИНИМУМ, но для начала присвоим max_element значение 0-го элемента массива
$min_element_index = 0; //индекс минимального элемента

for ($i=0; $i<9; $i++) {
    if ($max_element>=$rand_array[$i+1]) {/* если max_element БОЛЬШЕ сл. элемента, то ничего не делать, оставить как есть */}
    else {
        $max_element = $rand_array[$i+1];
        $max_element_index = $i+1;
    }

    if ($min_element<=$rand_array[$i+1]) {/* если min_element МЕНЬШЕ сл. элемента, то ничего не делать, оставить как есть */}
    else {
        $min_element = $rand_array[$i+1];
        $min_element_index = $i+1;
    }
}

//Выведем исходный массив в строчку:
for ($i=0; $i<10; $i++) {
    echo "$rand_array[$i]".", ";
}
echo PHP_EOL;

//А теперь поменяем местами максимальный и минимальный элементы:
$rand_array[$max_element_index] = $min_element;
$rand_array[$min_element_index] = $max_element;

//Выведем получившийся массив в строчку под старым, для удобства сравнения:
for ($i=0; $i<10; $i++) {
    echo "$rand_array[$i]".", ";
}
echo PHP_EOL;

//Также выведем максимальное и минимальное значение элементов массива:
echo "Max value: ".$max_element."; min value: ".$min_element.PHP_EOL;
