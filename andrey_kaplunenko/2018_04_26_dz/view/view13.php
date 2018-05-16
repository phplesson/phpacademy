<!--
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 5/16/18
 * Time: 10:27 PM
 */
/*
 * 13. Функция подсчитывает кол-во вхождений слова в строку.
 * */
-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Задача 13. Функция подсчитывает кол-во вхождений слова в строку.</title>
</head>
<body>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=13.php">
    <p><b>Введите текст. UTF-8 поддерживается.</b></p>
    <p><textarea rows="10" cols="45" name="textA"></textarea></p>
    <p><input type="submit" value="Посчитать статистику по словам"></p>
</form>
<p>Result: <?=$viewData['result'];?></p>
</body>
</html>