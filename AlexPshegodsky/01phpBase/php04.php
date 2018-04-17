<?php
$options = getopt('a:b:c:');
$firstNum = $options['a'];
$secondNum = $options['b'];
$action = $options['c'];

if (!isset($firstNum, $secondNum, $action)) {
	die('Not enough parameters!');
}

if ($action != 'add' && $action != 'sub' && $action != 'mult' && $action != 'div') {
	die('Error! Unknown operation!');
}

if ($action == 'add') {
	$result = $firstNum + $secondNum;
} elseif ($action == 'sub') {
	$result = $firstNum - $secondNum;
} elseif ($action == 'mult') {
	$result = $firstNum * $secondNum;
} elseif ($action == 'div' && $firstNum != 0 && $secondNum != 0) {
	$result = $firstNum / $secondNum;
} else {
	die('Error! Can\'t divide by zero!');
}


echo "$firstNum $action $secondNum equal $result";
