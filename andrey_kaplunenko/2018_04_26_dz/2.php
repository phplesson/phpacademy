<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 5/4/18
 * Time: 8:05 AM
 */
/*
 * 2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.
 * */
// вначале напишем callback для usort
function compareWords ($word1, $word2) {
    // iconv_strlen мы используем для учета многобайтных кодировок
    if(iconv_strlen($word1, 'UTF-8')==iconv_strlen($word2, 'UTF-8')) return 0;
    elseif (iconv_strlen($word1, 'UTF-8')<iconv_strlen($word2, 'UTF-8')) return -1;
    else return 1;
};

$interfaceArray = array(
    'description' => 'Задача 2. Функция, которая выводит ТОП-3 длинных слов из текста. Учитывает многобайтные кодировки и фильтрует знаки препинания!',
    'argCount' => '1',
    'func' => function ($processingText) {
        // Вначале удалим (при наличии) пробелы в начале и конце строки
        $processingText = trim($processingText);
        // Удалим лишние пробелы в середине строки
        $processingText = preg_replace("/\s{2,}/"," ", $processingText);
        // Теперь сделаем explode по признаку "пробел"
        $processingArray = explode(" ", $processingText);
        // Теперь с помощью ф-и rtrim подрежем запятые, точки, и др знаки препинания после слов
        foreach ($processingArray as &$value) {
            $value = rtrim($value, ',.!?');
        }
        usort($processingArray, 'compareWords'); // с помощью usort и callback ф-и отсортируем массив в порядке увеличения длины слов
        $reversedArray = array_reverse($processingArray);
        $top3Words[0] = $reversedArray[0];
        $top3Words[1] = $reversedArray[1];
        $top3Words[2] = $reversedArray[2];
        return(implode(' ', $top3Words));
    },
    'paramGenerator' => function () {
        $textBlocks = array(
            "а Васька слушает да ест.    а воз и ныне там? а вы друзья как ни садитесь, все в музыканты не годитесь! а король-то — голый. а ларчик просто открывался. а там хоть трава не расти.",
            "глава    Faceboooooook не назвал конкретных функций.",
            "   обработка строк? PHP Manual! сайт посвящен документации по PHP.русифицированное руководство с примерами на PHP. ",
            "среди автолюбителей довольно распространено мнение,   что единственной причиной обращения в автосервис может быть поломка автомобиля. однако это не совсем,  так",
        );
        $oneCellArray[0] = $textBlocks[rand(0, 3)]; //преобразуем строку в массив из одной ячейки, чтобы сохранить однотипность блоков в index.php
        return ($oneCellArray);
    },
    'view' => 'view/view2.php'
);

return ($interfaceArray);