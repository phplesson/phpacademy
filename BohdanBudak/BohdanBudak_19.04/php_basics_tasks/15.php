<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 21.04.2018
 * Time: 11:20
 */
$options = getopt('a:b:c:');
$firstNumber = $options['a'];
$secondNumber = $options['b'];
$operator = $options['c'];
if (is_numeric($firstNumber) && is_numeric($secondNumber)) {
    if ($operator == "+"){
        $result = $firstNumber + $secondNumber;
    } elseif ($operator == "-") {
        $result = $firstNumber - $secondNumber;
    } elseif ($operator == "*") {
        $result = $firstNumber * $secondNumber;
    } elseif ($operator == "/" && $firstNumber != 0 && $secondNumber != 0) {
        $result = $firstNumber / $secondNumber;
    } elseif ($operator == "%") {
        $result = $firstNumber % $secondNumber;
    }elseif ($operator != "+" && $operator != "-" && $operator != "*" && $operator != "/" && $operator != "%" ){
        echo "Error! This action doesn`t exist!";
    }else {
        echo "Error! You cannot divive by zero!";
    }
}