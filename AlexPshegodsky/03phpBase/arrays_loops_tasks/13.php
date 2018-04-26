<?php
//Вывести таблицу умножения

for ($i = 2; $i <= 10; $i++) {
    for ($j = 2; $j <= 10; $j++) {
        echo $i . '*' . $j . '=' . $i * $j . PHP_EOL;
    }
    echo PHP_EOL;
}
?>