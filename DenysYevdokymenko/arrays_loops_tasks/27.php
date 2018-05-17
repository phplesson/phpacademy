<?php
//echo "Введите количество строк:";
$rows = 5;
//echo "Введите количество столбиков:";
$cols = 5;
$colors = array('red', 'yellow','blue','gray','maroon','brown','green');

echo "<table>";
$i = 1;
while ($i<= $rows){
    $j = 1;
    echo "<tr>";
    while ($j <= $cols){
        $number = rand(1,99999);
        echo "<td style='background-color: ".$colors[rand(0,6)]."'>{$number}</td>";
        $j++;
    }
    echo "</tr>";
    $i++;
}
echo "</table>";
