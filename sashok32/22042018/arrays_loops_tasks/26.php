<?php
$arr = array(rand(1,100), rand(1,100), rand(1,100), rand(1,100), rand(1,100));
print_r($arr).PHP_EOL;

//$a = max ($arr);
//$b = min ($arr);


$mult = 1;


for ($i = 0; $i < count($arr); $i++) {
	if (strlen($arr[$i]) == 2) {
		$mult *= $arr[$i];
} elseif (strlen($arr[$i]) == 1 ||strlen($arr[$i]) == 3) {
		echo "Не парный элемент: $arr[$i]".PHP_EOL;
	}
}
echo "Произведение парных элементов составляет: $mult".PHP_EOL;
?>