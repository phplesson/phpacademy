<?php
echo 'Enter number: ';

$number = (int)readline();
if ($number<0) {
    echo 'Enter positive number';}
    else
    {
    $sum = 0;
    $temp = 0;
    $num = $number;
    while ($number != 0) {
        $temp = $number % 10;
        $sum += $temp;
        $number = ($number - $temp) / 10;
    }
    echo "Сумма цифр числа {$num} = {$sum}" . '<br>';
}


