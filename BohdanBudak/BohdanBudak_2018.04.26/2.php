<!--
/*
* 2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
Реализовать с помощью функции.
 */
 -->
<?php

return [
    'description' => 'Функция, которая выдает ТОП 3 длинных слов в тексте.',
    'func' => function ($text) {
        $words = explode(" ", $text);
        usort($words, function ($a, $b) {
            return mb_strlen($b) - mb_strlen($a);
        });
        return array_slice($words, 0, 3);
    },
    'paramGenerator' => function() {
        return [];
    },
    'argCount' => '1',
    'view' => 'view/2Top3Words.php',
];

