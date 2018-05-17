<!--
/*
 * 9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать
 * с помощью формы.
 * */
 -->
<?php
return [
    'description' => 'Функция которая переворачивает строку',
    'func' => function ($str) {
    ////записываем индекс последнего слова строки
    $index = strlen($str) - 1;
    $reversedString = '';
    ///повторяем тело цикла до момента, когда цикл дойдет до первого символа.
    while ($index >= 0) {
        ///берем из строки символ по текущему индексу
        $currentChar = $str[$index];
        ///записываем в строку текущий результат + новый символ
        $reversedString = $reversedString.$currentChar;
        ////обновляем счетчик
        $index = $index - 1;
    }

    return $reversedString;
    },

    'paramGenerator' => function() {
        return[];
    },
    'argCount' => '1',
    'view' => 'view/9Reverse_String.php',
];