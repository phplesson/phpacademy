<?php
function SUM ($a, $b) {
    return($a+$b);
};

$SUM_Alias = 'SUM';

$interfaceArray = array(
        'text' => 'функция которая складывает два числа',
        'paramCount' => '2',
        'func' => $SUM_Alias,
        'paramGenerator' => function () {return ([rand(1,100), rand(1,100)]);},
);

return ($interfaceArray);
