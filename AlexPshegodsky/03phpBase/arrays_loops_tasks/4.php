<?php
//Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.

$arr = array(
    'green' => 'зеленый',
    'red' => 'красный',
    'blue' => 'голубой',
);

foreach ($arr as $key => $value) {

    echo "Ключ: $key" . PHP_EOL;


}

foreach ($arr as $key => $value) {

    echo "Значение: $value" . PHP_EOL;

}