<?php

// 1. Создать форму с двумя элементами textarea. При отправке формы
// скрипт должен выдавать только те слова, которые есть и в первом и во второмполе ввода.
// Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b),
// которая будет возвращать массив с общими словами.



if (!empty($_GET[$a]) && !empty($_GET[$b]))
{
    function get($a, $b) {

        $a = explode(" ", $_GET[$a]);
        $b = explode(" ", $_GET[$b]);

        $result = array_intersect ($a, $b);

        print_r ($a);
        print_r ($b);
        print_r ($result);
    }


    get($_GET[$a], $_GET[$b]);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="28.04.18(01).php" method="GET">
    <label>Input $a<br/><textarea name="$a" placeholder="write $a"></textarea></label><br/>
    <label>Input $b<br/><textarea name="$b" placeholder="write $b"></textarea></label><br/>
    <input type="submit" value="OK"><br/>
</form>
</body>
</html>
