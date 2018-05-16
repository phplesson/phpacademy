<!--
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/29/18
 * Time: 11:11 PM
 */
/*
 * 1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова,
 * которые есть и в первом и во втором поле ввода.
 * Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
 * */
 -->

<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Задача 2. Функция, которая выводит ТОП-3 длинных слов из текста. Учитывает многобайтные кодировки и фильтрует знаки препинания!</title>
 </head>
 <body>
  <form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=2.php">
    <p><b>Поле ввода 1:</b></p>
    <p><textarea rows="10" cols="45" name="textA"></textarea></p>
    <p><input type="submit" value="Найти ТОП-3!"></p>
  </form>
  <p>Result: <?=$viewData['result'];?></p>
 </body>
</html>

