<?php
$a = $_POST ['a'];
//echo "$a";

function top3($a){
//$text = 'раз четыре шестьдесят сорок пользователь он автомобиль номер';
$arr = array_flip(explode(' ', $a));
// определяем длину
foreach ($arr as $word => $length) {
    $arr[$word] = mb_strlen($word);
}
// сортируем
asort($arr);
// последние 3 элемента
$result = array_slice($arr, -3, 3);
print_r($result);
}
top3($a);
?>
<hr>
<form action="1.php" method="post">
    <textarea name="a"></textarea><br>
    <input type="submit" value="ok">
</form>