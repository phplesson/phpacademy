<?php
//Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru.
$arr = array(
    'green' => 'зеленый',
    'red' => 'красный',
    'blue' => 'голубой',
);

$en = array();
$ru = array();

foreach ($arr as $key => $value) {

    $en[] = $key;
    $ru[] = $value;

}

print_r($en);
print_r($ru);