<?php
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$row = 7;
$cols = 8;

echo "<table border='1'>";
for ($i = 0; $i < $row; $i++ ) {
	echo "<tr>";
	for ($j = 0; $j < $cols; $j++) {
		echo "<td style='background-color:".$colors[array_rand($colors, 1)]."'>".rand()."</td>";
	}
	echo "</tr>";
}
echo "</table>";


?>