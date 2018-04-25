<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 16.04.2018
 * Time: 21:56
 */
$options = getopt('a:b:c:');
$firstNumber = $options['a'];
$secondNumber = $options['b'];
$action = $options['c'];

if ($action == "add"){
    $result = $firstNumber + $secondNumber;
} elseif ($action == "sub") {
    $result = $firstNumber - $secondNumber;
} elseif ($action == "mult") {
    $result = $firstNumber * $secondNumber;
} elseif ($action == "div" && $firstNumber != 0 && $secondNumber != 0) {
    $result = $firstNumber / $secondNumber;
} elseif ($action != "add" && $action != "sub" && $action != "mult" && $action != "div" ){
    echo "Error! This action doesn`t exist!";
} else {
    echo "Error! You cannot divive by zero!";
}

echo $firstNumber . $action . $secondNumber .  "=" . $result;