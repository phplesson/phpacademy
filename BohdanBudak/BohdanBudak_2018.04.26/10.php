<!--
10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами.
Текст должен вводиться с формы.
-->
<?php
return [
'description' => 'Функция, которая считает количество уникальных слов в тексте',
'func' => function ($text) {
$unique = explode(' ', $text);
$unique = array_unique($unique);
$uniqueCount = count ($unique);
return $uniqueCount;},
'paramGenerator' => function() {
return [];
},
'argCount' => 1,
'view' => 'view/10UniqueWords.php',
];
