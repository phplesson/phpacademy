<?php
//Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице. Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число.
// !!! открывать  как Web страницу (через веб сервер)

$rows = 10; //ввести кол-во рядов
$cols = 10; //ввести кол-во колонок
$colors = array(
    'red',
    'yellow',
    'blue',
    'gray',
    'maroon',
    'brown',
    'green',
);

echo '<table border="1">';

for ($i = 0; $i < $rows; $i++) {
    echo '<tr>';
    for ($j = 0; $j < $cols; $j++) {
        $cellColor = $colors[rand(1, 6)];
        echo "<td style='background-color:$cellColor'>";
        echo rand(100, 5000);
        echo "</td>";
    }
    echo '</tr>';
}