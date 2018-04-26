<?php
//Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза.

$userInputNumber = readline("Enter number: ");
$inputArray = str_split($userInputNumber);
$result = 0;

foreach ($inputArray as $item) {
    if (!is_numeric($item)) {
        die('Error! Wrong Value' . PHP_EOL);
    }
}

$userSearchedNumber = readline("Enter number to search: ");

if (!is_numeric($userSearchedNumber)) {
    die('Error! Wrong searched number' . PHP_EOL);
}


foreach ($inputArray as $item) {
    if ($item == $userSearchedNumber) {
        $result++;
    }
}

echo "Searching number $userSearchedNumber in $userInputNumber. Found $result times;" . PHP_EOL;
