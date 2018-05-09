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
  <title>Задача 1. Функция возвращает слова, которые есть и в 1 и во 2 textarea.</title>
 </head>
 <body>
  <form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=1.php">
    <p><b>Поле ввода 1:</b></p>
    <p><textarea rows="10" cols="45" name="textA"></textarea></p>
    <p><b>Поле ввода 2:</b></p>
    <p><textarea rows="10" cols="45" name="textB"></textarea></p>
    <p><input type="submit" value="Найти общие слова"></p>
  </form>
  <p>Result: <?=$viewData['result'];?></p>
 </body>
</html>

