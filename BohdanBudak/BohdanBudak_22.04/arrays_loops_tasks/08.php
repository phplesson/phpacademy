<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 25.04.2018
 * Time: 12:17
 */
/**Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
'­1­2­3­4­5­6­7­8­9­'. */

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $itemValue) {
    echo $itemValue;
}