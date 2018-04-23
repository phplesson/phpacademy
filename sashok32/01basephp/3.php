<?php
// Калькулятор

$options = getopt('a:b:c:');
$a = $options['a'];
$b = $options['b'];
$c = $options['c'];
if (is_numeric($a) && is_numeric($b)) {
	if ($c == "add") {
		$sum = $a + $b;
		echo $sum;
	} elseif ($c == "sub") {
			$sub = $a - $b;
			echo $sub;
	} elseif ($c == "mult") {
			$mult = $a * $b;
			echo $mult;
	} elseif ($c == "div") {
			if ($b == 0) {
				echo "You can not divide it by zero\n";
					exit();
			}
			$div = $a / $b;
			echo $div;
	} else {
		echo "Enter the correct two numbers and action\nExample: php 3.php -a[] -b[] -c[add][sub][mult][div]\n";
	}
} else {
	echo "\nEnter the correct two numbers and action\nExample: php 3.php -a[] -b[] -c[add][sub][mult][div]\n";
}
?>