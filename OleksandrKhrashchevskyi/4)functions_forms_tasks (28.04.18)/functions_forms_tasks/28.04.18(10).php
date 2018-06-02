// 10.Написать функцию, которая считает количество уникальных слов
// в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.




<?php
function howmany($str){
    echo count(array_unique(str_word_count($str, 1)));

    // count — Подсчитывает количество элементов массива или что-то в объекте
    // array_unique — Убирает повторяющиеся значения из массива
    // str_word_count — Возвращает информацию о словах, входящих в строку
}




if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['button']))

{
    $str=htmlspecialchars($_POST['comment']);
    howmany($str);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="28.04.18(10).php">
   <textarea name="comment" rows="5" cols="30">

   </textarea><br />
    <input type="submit" name="button" value="PUSH">
    <input type="reset" name="button" value="DEL">





</form>
</body>
</html>