<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/24/18
 * Time: 9:34 PM
 */
/*
 * 12. Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50.
 * Какое число получится? Посчитайте количество итераций, необходимых для этого
 * (итерации — это количество проходов цикла), и запишите его в переменную $num.
 * */

$n=1000;
$result=$n;
$num=0;
do {
   $result/=2;
   $num+=1;
} while ($result >= 50);
echo 'Result: '.$result.', num of iterations: '.$num.PHP_EOL;