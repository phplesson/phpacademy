<?php
// 4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
// помощью второго — столбец элементов.
// $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');


$arr = array('green '=>'зеленый ', 'red '=>'красный ','blue'=>'голубой ');

echo ' Столбец елементов'. PHP_EOL;
foreach ($arr as $b )
   echo $b . PHP_EOL;

echo ' Столбец элементов'. PHP_EOL;
foreach ($arr as $c)
    echo $c . PHP_EOL;

