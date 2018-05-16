<!--
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 5/16/18
 * Time: 10:13 PM
 */
/*
 * 11. Предложение с большой буквы
 */
 -->

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Задача 11. Функция начинает предложение с большой буквы.</title>
</head>
<body>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=11.php">
    <p><b>Введите текст. UTF-8 поддерживается.</b></p>
    <p><textarea rows="10" cols="45" name="textA"></textarea></p>
    <p><input type="submit" value="Расставить заглавные буквы"></p>
</form>
<p>Result: <?=$viewData['result'];?></p>
</body>
</html>