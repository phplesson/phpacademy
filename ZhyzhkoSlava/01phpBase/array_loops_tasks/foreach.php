<?php

$arr = ['html', 'css','php','js', 'jq'];
//print_r($arr);
foreach ($arr as $key => $value) {
	echo "$key - $value<br>";
}
echo "<hr>";

$arr2 = [1, 20, 15, 17, 24, 35];
$result = 0;
foreach ($arr2 as $elem) {
	$result += $elem;
}
echo $result;
echo "<hr>";
echo array_sum($arr2);
echo "<hr>";

$arr3 = [26, 17, 136, 12, 79, 15];
$res = 0;
foreach ($arr3 as $value) {
	$kvadrat = pow($value, 2);
	$res = $res + $kvadrat;
}
echo $res;
echo "<hr>";

$arr4 = ['green' => 'зеленый','red' => 'красный','blue' => 'синий'];
foreach ($arr4 as $key=>$value) {
	echo "keys => ".$key."<br>";
}
foreach ($arr4 as $value) {
	echo "value => ".$value."<br>";
}
echo "<hr>";

$arr5 = ['Коля' => '200','Вася' => '300','Петя' => '400'];
foreach ($arr5 as $key => $value) {
	echo $key." зарплата - ".$value."<br>";
}
echo "<hr>";

$arr6 = ['green' => 'зеленый','red' => 'красный','blue' => 'синий'];

foreach ($arr6 as $key => $value) {
	$en[] = $key;
	$ru[] = $value;
}
var_dump($en);
var_dump($ru);
echo "<hr>";

$arr7 = [2, 5, 9, 15, 0, 4];
foreach ($arr7 as $key => $value) {
	if ($value>3 and $value<10) {
		echo "$value <br>";
	}
}
echo "<hr>";

$arr8 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr8 as $value) {
	echo "$value";
}

echo "<hr>";











