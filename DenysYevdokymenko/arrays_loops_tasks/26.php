<?php
$arr = array();
for ($i=1; $i<=10; $i++) {
    $arr[$i] = rand(1,100);
}
//Вывод текущего масива
foreach ($arr as $k => $value) {
    echo "Initial array: \$a[$k] => $value" . '<br>';
}
$sum = 1;
echo '<hr>';

//Вывод елементов с нечетными индексами и произведение елементов с четными
foreach ($arr as $k => $value){
    if ($k % 2 == 0) {
        $sum = $sum * $value;
    }
    if (($value > 0) && ($k % 2 == 1)) {
        echo "Element with odd key: a[{$k}] => {$value}" . '<br>';
    }
}
echo '<hr>'."Произведение елементов с четными индексами: {$sum}";

