<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/17/18
 * Time: 7:47 PM
 */

var_dump($argv);

if ($argc == 1 or $argc > 4) {
echo "Usage of primitive calculator:
    put arguments and operators as command line parameters.
    [first_argument] [operator] [second argument]
    Example: 22 add 4
    Example: 30 sub 12
    Example: 45 mult 92.8
    Example: 44 div 21
    Only two arguments and one operator is supported.\n";
} else {

    $first_arg = $argv[1];
    $operator = $argv[2];
    $second_arg = $argv[3];
    $result = 0.0;

    if (!(is_numeric ($first_arg))) {
        echo "First argument is not numeric. We're closing...\n";
        exit ();
    }

    if (!(is_numeric ($second_arg))) {
        echo "Second argument is not numeric. We're closing...\n";
        exit ();
    }

    if ($operator == "add")
    {
        $result = $first_arg+$second_arg;
        echo "RESULT >> ".$result."\n";
    } elseif ($operator == "sub")
    {
        $result = $first_arg-$second_arg;
        echo "RESULT >> ".$result."\n";
    } elseif ($operator == "mult")
    {
        $result = $first_arg*$second_arg;
        echo "RESULT >> ".$result."\n";
    } elseif ($operator == "div")
    {
        $result = $first_arg/$second_arg;
        echo "RESULT >> ".$result."\n";
    } else echo "Unknown operator. Only add, sub, mult, div are supported.\n";
}


echo "\nThank you for using primitive calc! Bye!\n";