<?php
//Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть — выведите на экран 'Есть!', иначе выведите 'Нет!'.


$numbers = array(
    4,
    2,
    5,
    19,
    13,
    0,
    10,
);

//$e = 2;
//$e = 3;
$e = 4;

$hasNumber = FALSE;

foreach ($numbers as $number) {

    if ($number == $e) {
        $hasNumber = TRUE;
        break;
    }
}

if ($hasNumber) {
    echo "ЕСТЬ" . PHP_EOL;
} else {
    echo "НЕТ" . PHP_EOL;
}
