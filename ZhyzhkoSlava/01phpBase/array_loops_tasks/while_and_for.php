<?php
$i = 11;
while ($i <= 33) {
	echo $i++." ";
}
echo "<hr>";

for ($i=0; $i <= 100; $i++) { 
	if ($i % 2 == 0)
	echo $i++." ";
}
echo "<hr>";


$n = 1000;
$num=0;
while ( $n > 50) {
	$n = $n/2;
	$num++; 
}
echo "Rezultat deleniya - ".$n."<br>";
echo "Kolichestvo iteraziy - ".$num;

echo "<hr>";

for($i = 0; $i <= 10; $i++) {
  echo'<table><tr>';
  for($j = 0; $j <= 10; $j++) 
   echo '<td>',$j?$i?$i*$j:$j:$i,'</td>';
  echo'</tr></table>';
}

echo "<hr>";
$e=3;
$arr9 = [4, 2, 5, 19, 13, 0, 10];

if (in_array($e, $arr9)){
	echo "YEEEESSSSSS!";
}else{
	echo "NOOOOOOOOOO!";
}
echo "<hr>";

$counts=0;
$arr10 = [4, 2, 5, 19, 13, 0, 10];
foreach ($arr10 as $value) {
	$counts++;
}
echo "$counts";
echo "<hr>";

$arr11 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr11 as $key => $value) {
    echo $value;
    if (($key + 1) % 3) {
        echo ', ';
    } else {
        echo "<br>";
    }
}

echo "<hr>";

$arr12 = ['1'=> 'Янв', 'Фев', 'Мар', 'Фeв', 'Май','Июн','Июл', 'Авг', 'Сен','Окт', 'Ноя', 'Дек'];
$month= 'Дек';
foreach ($arr12 as $value) {
	if ($value == $month) {
		echo "<strong>{$value}</strong><br>";
	}
	else {
		echo "{$value}<br>";
	}
}
echo "<hr>";

$arr13 = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];
$wekend1 = 'Суббота';
$wekend2 = 'Воскресенье';
foreach ($arr13 as $key => $value) {
	if (($value == $wekend1) or ($value == $wekend2)) {
		echo "<strong>{$value}</strong><br>";
	}
	else {
		echo "{$value}<br>";
	}
}
echo "<hr>";
$arr14 = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'];
$day = 'Вторник';
foreach ($arr14 as $key => $value) {
	if ($value == $day) {
		echo "<strong>{$value}</strong><br>";
	}
	else {
		echo "{$value}<br>";
	}
}
echo "<hr>";

$s = 'x';
for ($i = 0; $i < 20; $i++, $s .= 'x') { //vopros?????????
    echo "{$s}<br>";
}

echo "<hr>";

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i;
    }
    echo "<br>";
}

echo "<hr>";

$s = 'xx';
while ( strlen($s)<= 10) {
	echo "{$s}<br>";
	$s .= 'xx';
}

echo "<hr>";