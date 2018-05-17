<!--
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 5/16/18
 * Time: 9:23 PM
 */
/*
 * 10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.
 * */
 -->
<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Задача 10. Функция, которая считает кол-во уникальных слов в тексте.</title>
 </head>
 <body>
  <form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=10.php">
    <p><b>Задача 10. Функция, которая считает кол-во уникальных слов в тексте. Поддерживается UTF-8.</b></p>
    <p><textarea rows="10" cols="45" name="textA"></textarea></p>
    <p><input type="submit" value="Посчитать уникальные слова"></p>
  </form>
  <p>Result: <?=$viewData['result'];?></p>
</body>
</html>