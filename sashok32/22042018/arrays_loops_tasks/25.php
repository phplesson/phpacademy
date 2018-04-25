<?php
$arr = array(rand(1,50), rand(1,50), rand(1,50), rand(1,50), rand(1,50));
print_r($arr).PHP_EOL;
$a = max ($arr);
$b = min ($arr);
for ($i = 0; $i < count($arr); $i++) {
	if ($arr[$i] == $a) {
		$arr[$i] = $b;
	} elseif ($arr[$i] == $b) {
		$arr[$i] = $a;
	}
}
print_r($arr).PHP_EOL;
?>