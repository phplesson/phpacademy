<?php
//Задание 2 (IF и SWITCH)
//3-В:Дано натуральное четырехзначное число n(n9999).
//Является ли это число полиндромом (перевертышем), как, например, числа 2222, 6116, 0440.

function IsPolyndrom($n)
{
    $n = strval($n);
    if (!isset($n{1})) return true;
    $is = true;
    for ($i = 0; $i < strlen($n); $i++ )
    {  if ($n{$i} != $n{strlen($n) - 1 - $i}) $is = false;  }
    return $is;
}


var_dump( IsPolyndrom(121) );
var_dump( IsPolyndrom(1214) );