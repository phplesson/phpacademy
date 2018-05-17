<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.05.18
 * Time: 23:44
 */

return [
    'description' => 'list of tasks',
    'func' => function() {
        return null;
    },
    'paramGenerator' => function () {
        return [];
    },
    'argCount' => 0,
    'view' => 'view/menu.php',
    'actionList' => [
        1 => 'Задача 1. Функция возвращает слова, которые есть и в 1 и во 2 textarea.',
        2 => 'Задача 2. Функция, которая выводит ТОП-3 длинных слов из текста.',
        9 => 'Задача 9. Функция, которая переворачивает строку',
    ],
];