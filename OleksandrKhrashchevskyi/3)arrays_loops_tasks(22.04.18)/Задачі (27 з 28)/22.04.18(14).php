<?php
// 14.Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
// проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
// выведите на экран 'Есть!', иначе выведите 'Нет!'.</p>

$arr = [4, 2, 5, 19, 13, 0, 10];


do
{
    foreach ($arr as $a) {
        if ($a == 2 or $a == 3 or $a == 4) {
            echo 'Є';
            break 2;
        }

        echo 'Нема!';
    }
} while (0);