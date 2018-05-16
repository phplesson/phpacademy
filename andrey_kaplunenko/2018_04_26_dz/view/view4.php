<!--
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 5/16/18
 * Time: 9:55 PM
 */
/*
 * 4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.
 */
-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Задача 4. Функция выводит список файлов в заданной директории.</title>
</head>
<body>
<form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=4.php">
    <p><b>Введите путь к папке:</b></p>
    <p><input type="text" name="path" value="/"></p>
    <p><input type="submit" value="Посмотреть содержимое папки"></p>
</form>
<p>Result: <?=$viewData['result'];?></p>
</body>
</html>