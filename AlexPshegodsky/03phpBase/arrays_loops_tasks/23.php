<?php
//Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
//По желанию можете сделать проверку на корректность введения данных пользователем.

$userInput = readline("Enter positive number: ");
$inputArray = str_split($userInput);
$result = 0;

foreach ($inputArray as $item) {
    if (!is_numeric($item)) {
        die('Error! Wrong Value' . PHP_EOL);
    }
}

foreach ($inputArray as $item) {
    $result = $result + $item;
}

echo $result . PHP_EOL;