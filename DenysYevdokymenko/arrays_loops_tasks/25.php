<?php
$arr = array();
for ($i=0; $i<10; $i++) {
    $arr[$i] = rand(0,100);
}
$max = $min = $arr[0];

//вывод исходного массива
foreach ($arr as $k => $value) {
    echo "Initial array: \$a[$k] => $value" . '<br>';
}
echo '<hr>';

//Нахождение и вывод максимального и минимального значения
foreach ($arr as $k => $value) {
    if ($value < $min && $min >= $min) {
        $min = $value;
    }
    if ($value > $max && $max <= $max) {
        $max = $value;
    }
}
echo "Max element: {$max}, Min element: {$min}";

//Перестановка макисмального и минимального значения
foreach ($arr as $k => $value){
    if ($value == $max) {
        $arr[$k] = $min;
    }
    if ($value == $min) {
        $arr[$k] = $max;
    }
}
echo '<hr>';

//Вывод измененного массива
foreach ($arr as $k => $value) {
    echo "Finish array: \$a[$k] => $value" . '<br>';
}