<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 25.04.2018
 * Time: 12:20
 */

/** Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице,
 * $cols - кол-во столбцов в таблице. Есть список цветов,
 * в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
 * Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
 * в которой все ячейки будут иметь цвета,
 * выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число
 */

$rows = 5;
$cols = 5;
$colors = [
    'red',
    'yellow',
    'blue',
    'gray',
    'maroon',
    'brown',
    'green',
];
echo '<table border="1">';
for ($i = 0; $i < $rows; $i++) {
    echo '<tr>';
    for ($j = 0; $j < $cols; $j++) {
        $randcolor = $colors[rand(1, 7)];
        echo "<td style='background-color:$randcolor'>";
        echo "</td>";
    }
    echo '</tr>';
} echo "</table>";