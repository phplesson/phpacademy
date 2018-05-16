<?php
// 17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
// месяц выведите жирным. Текущий месяц должен храниться в переменной $month.


$a = [
    1 =>'Der Januar',
    2 => 'Der Februar',
    3 => 'Der März',
    4 => 'Der April',
    5 => 'Der Mai',
    6 => 'Der Juni',
    7 => 'Der Juli',
    8 => 'Der August',
    9 => 'Der September',
    10 => 'Der Oktober',
    11 => 'Der November',
    12 => 'Der Dezember'
];


foreach ($a as $b){
    if($b == $a){
        echo $b.' - Місяць'.PHP_EOL;
    } else
        echo $b.PHP_EOL;
}