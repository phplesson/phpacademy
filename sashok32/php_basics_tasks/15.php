<?php
/* Запуск через командную строку в виде: 
*  php 15.php [] [] [+][-][*][/][%]
*/

/* $options = getopt('a:b:c:');
$a = $options['a'];
$b = $options['b'];
$c = $options['c']; */


if ($argc != 4) {
	echo "\nEnter the correct two numbers and action\nExample: php 3.php [] [] [+][-][*][/][%]\n";
	exit();
} else {
	$a = $argv[1];
	$b = $argv[2];
	$c = $argv[3];
	if (is_numeric($a) && is_numeric($b)) {
		if ($c == "+") {
			$sum = $a + $b;
			echo $sum;
		} elseif ($c == "-") {
				$sub = $a - $b;
				echo $sub;
		} elseif ($c == "*") {
				$mult = $a * $b;
				echo $mult;
		} elseif ($c == "/") {
				if ($b == 0) {
					echo "You can not divide it by zero\n";
					exit();
				}
				$div = $a / $b;
				echo $div;
		} elseif ($c == "%") {
				$per = $a % $b;
				echo $per;
		} else {
			echo "Enter the correct two numbers and action\nExample: php 15.php [] [] [+][-][*][/][%]\n";
		}
	} else {
		echo "\nEnter the correct two numbers and action\nExample: php 15.php [] [] [+][-][*][/][%]\n";
	}
}
?>
