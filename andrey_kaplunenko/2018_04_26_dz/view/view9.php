<!--
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 5/16/18
 * Time: 9:55 PM
 */
/*
 * 9. Переворот строки
 */
-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Задача 9. Функция переворачивает строку.</title>
</head>
<body>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=9.php">
    <p><b>Введите текст. С русским эта функция пока не дружит...</b></p>
    <p><textarea rows="10" cols="45" name="textA"></textarea></p>
    <p><input type="submit" value="Перевернуть строку"></p>
</form>
<p>Result: <?=$viewData['result'];?></p>
</body>
</html>

