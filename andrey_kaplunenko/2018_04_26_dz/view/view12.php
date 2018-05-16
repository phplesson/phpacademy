<!--
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 5/16/18
 * Time: 10:21 PM
 */
/*
 * 12. форматирует строку так, что предложения идут в обратном порядке.
 * */
-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Задача 12. Функция расставляет предложения в обратном порядке.</title>
</head>
<body>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=12.php">
    <p><b>Введите текст. UTF-8 поддерживается.</b></p>
    <p><textarea rows="10" cols="45" name="textA"></textarea></p>
    <p><input type="submit" value="Поменять порядок предложений"></p>
</form>
<p>Result: <?=$viewData['result'];?></p>
</body>
</html>