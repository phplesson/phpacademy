<!--
13. Есть строка $string = 'яблоко черешня вишня вишня черешня груша яблоко
черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня
груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';<br>
Подсчитайте, сколько раз каждый фрукт встречается в этой строке.
Выведите  в виде списка в порядке уменьшения количества:
Пример вывода:<br>
яблоко – 12<br>
    черешня – 8<br>
    груша – 5<br>
    слива - 3<br>
-->
<?php
return [
    'description' => 'Функция, которая подсчитывает сколько раз слова встречаются строке и выводит в виде списка 
    в порядке уменьшения количества',
    'func' => function ($text) {
        $count = explode(' ', $text);
        $count = array_count_values($count);
        arsort($count);
        return $count;
    },
    'paramGenerator' => function() {
        return [];
    },
    'argCount' => 1,
    'view' => 'view/13CountWords.php',
];