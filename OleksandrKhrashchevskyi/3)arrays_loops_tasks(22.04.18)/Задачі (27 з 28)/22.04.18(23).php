<?php

// 23.Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
// пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
// 2, 3, т. е. 6

$a = 123;
$a = str_split($a);
$b = 0;
for ($i=0; $i<count($a); $i++) {
    $b += $a[$i];
}
echo $b;
