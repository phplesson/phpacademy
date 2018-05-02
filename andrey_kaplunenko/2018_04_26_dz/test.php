<?php
function SUM ($a, $b) {
    return($a+$b);
}

$SUM_Alias = 'SUM';


function twoRandNum () {
    return ([rand(1,100), rand(1,100)]);
}

$twoRandNum_Alias = 'twoRandNum';

$interfaceArray = array(
        'text' => 'функция которая складывает два числа',
        'paramCount' => '2',
        'func' => $SUM_Alias,
        'paramGenerator' => $twoRandNum_Alias,
);
//var_dump($interfaceArray['paramGenerator']);
return ($interfaceArray);
