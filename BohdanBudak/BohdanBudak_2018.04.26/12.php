<!--
Нписать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что предложения идут
 ва обратном порядке.
-->
<?php
return [
    'description' => 'Функция у которой предложения идут в обратном порядке.',
    'func' => function ($reverse){
        $reverse2 ="";
        $words = explode('. ', $reverse);
        $i = count($words) - 1;
        while ($i >= 0) {
            $reverse2 .= $words[$i];
            if ($i < count($words) -1) {
                $reverse2 .= ".";
            }
            $i--;
        }
        return $reverse2;
        },
    'paramGenerator' => function() {
        return [];
    },
    'argCount' => 1,
    'view' => 'view/12Reverse_Words.php',
];