
<?php

$arr = array("green" => "зеленый", "red" => "красный", "blue" => "голубой");

$en = array();
$ru = array();
foreach ($arr as $key => $value) {
	$en[]=$key;
	$ru[]=$value;
}
print_r ($en).PHP_EOL;
echo "<br />".PHP_EOL;
print_r ($ru).PHP_EOL;
?>
