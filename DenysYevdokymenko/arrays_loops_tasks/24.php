<?php
echo 'Enter number: ';

$number = readline();
//Ввод произвольного числа (строки)
echo 'Enter digit: ';
//Ввод искомого числа (фрагмента)
$digit = readline();

$count = substr_count($number, $digit);
//Количество вхождений

echo "Елемент {$digit} входит в  {$number} - {$count} раз";




