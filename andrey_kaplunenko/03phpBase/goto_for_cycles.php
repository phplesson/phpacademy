<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/23/18
 * Time: 5:01 PM
 */
/*
 * Задача - использовать оператор goto для построения циклов аналогичных циклам for, while, do-while.
 *
 * Пояснение к решению:
 * циклы for, while, do-while отличаются по сути проверкой условия - до или после тела цикла.
 * Так, в циклах for и while условие проверяется до тела цикла, и могут быть случаи когда цикл не выполнится ни разу;
 * в цикле do-while условие проверяется после тела цикла. Поэтому такой цикл выполнится как минимум 1 раз.
 * Таким образом, если необходимо перейти от классических циклов к оператору goto, мы сведем задачу к двум вариантам -
 * проверке условия ДО тела цикла и проверке условия ПОСЛЕ. А оператором goto будем ссылаться на точку входа.
 * */

$array = [4,2,3,6,4,7,8,9,0,2]; //придумаем случайный массив для работы с циклами

echo "Display numbers using FOR cycle:".PHP_EOL;
for ($i=0; $i<10; $i++) {
    echo $array[$i].", ";
}
echo PHP_EOL.PHP_EOL;

echo "Display numbers using WHILE cycle:".PHP_EOL;
$i=0;
while ($i<10) {
    echo $array[$i].", ";
    $i++;
}
echo PHP_EOL.PHP_EOL;

echo "Display numbers using DO-WHILE cycle:".PHP_EOL;
$i=0;
do {
    echo $array[$i].", ";
    $i++;
} while ($i<10);
echo PHP_EOL.PHP_EOL;

echo "Сycle made with GOTO and checking expression after:".PHP_EOL;
$i=0;
label1:
echo $array[$i].", ";
$i++;
if ($i<10) goto label1;
echo PHP_EOL.PHP_EOL;

echo "Сycle made with GOTO and checking expression first:".PHP_EOL;
$i=0;
label2:
if ($i<10) {
    echo $array[$i].", ";
    $i++;
    goto label2;
}
echo PHP_EOL.PHP_EOL;