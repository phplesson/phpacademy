<?php
$cols = 20;
$rows = 20;
$tr = 1;

echo "<table border ='1'>";

while ($tr <=$rows){
    echo "<tr>";
    $td = 1;
    while ($td<=$cols){
        echo "<td>".$tr*$td."</td>";
        $td++;
    }
    echo "</tr>";
    $tr++;
}
echo "</table>";