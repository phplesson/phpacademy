<!--
/**1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова,
* которые есть и в первом и во втором поле ввода.
* Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
*/
 -->
<?php

return [
    'description' => 'Функция которая возвращает массив с общими словами',
    'func' => function ($a, $b) {
        $a = explode(" ", $a);
        $b = explode(" ", $b);
        $result = array_intersect ($a, $b);
        return $result;},
    'paramGenerator' => function() {
        return [];
    },
    'argCount' => '2',
    'view' => 'view/1CommonWords.php',
];