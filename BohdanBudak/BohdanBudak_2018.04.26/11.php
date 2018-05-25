<!--
11.Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что каждое новое
 предложение начиняется с большой буквы.
-->
<?php
return [
    'description' => 'Функция, которая каждое новое предложение начинает с большой буквы',
    'func' => function ($upper) {

        $text = explode('. ', $upper );

        foreach ($text as $value){
            $result[] = mb_convert_case($value, MB_CASE_TITLE);
        }
        $result = implode('. ', $result);
        return ($result);},
    'paramGenerator' => function() {
        return [];
    },
    'argCount' => 1,
    'view' => 'view/11Upper_Register.php',
];