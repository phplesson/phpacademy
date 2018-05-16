<!--
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 5/16/18
 * Time: 8:43 PM
 */
/*
 * 3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
 * Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.
 * */
-->

<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Задача 3. Функция, удаляет из файла слова, длиннее N символов. N и путь к файлу задаются как параметры функции.</title>
 </head>
 <body>
  <form method="POST" enctype="application/x-www-form-urlencoded" action="index.php?action=3.php">
    <p><b>Введите длину слова N:</b></p>
    <p><input type="number" name="length" value="3"></p>
    <p><b>Введите путь к файлу:</b></p>
    <p><input type="text" name="path" value="3.txt"></p>
    <p><input type="submit" value="Удалить длинные слова"></p>
  </form>
  <p>Result: <?=$viewData['result'];?></p>
</body>
</html>

