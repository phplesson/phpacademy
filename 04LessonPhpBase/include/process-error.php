<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 26.04.18
 * Time: 16:17
 */


$a = set_error_handler('errorHandler2', 0xffff);

function errorHandler1($errno, $errstr, $errfile, $errline, $errcontext) {

    echo "in file $errfile" . PHP_EOL;
    echo "in line $errline" . PHP_EOL;
    echo "an error appears!!" . PHP_EOL;

    echo "error number: $errno" . PHP_EOL;
    echo '----------------error message----------------' . PHP_EOL;
    echo $errstr . PHP_EOL;
    echo '---------------------------------------------' . PHP_EOL;

//    echo var_dump($errcontext);
    echo PHP_EOL . PHP_EOL;
    
    return false;

}

function errorHandler2($errno, $errstr, $errfile, $errline, $errcontext) {

    $errorFilter = error_reporting();

    if ($errorFilter == 0) {
        echo 'an error appear, but it is hidden' . PHP_EOL;

        return true;
    }


    echo "in file $errfile" . PHP_EOL;
    echo "in line $errline" . PHP_EOL;
    echo "an error appears!!" . PHP_EOL;

    echo "error number: $errno" . PHP_EOL;
    echo '----------------error message----------------' . PHP_EOL;
    echo $errstr . PHP_EOL;
    echo '---------------------------------------------' . PHP_EOL;

//    echo var_dump($errcontext);
    echo PHP_EOL . PHP_EOL;

    return true;
}

function errorHandler3($errno, $errstr, $errfile, $errline, $errcontext) {

    echo "in file $errfile" . PHP_EOL;
    echo "in line $errline" . PHP_EOL;
    echo "an error appears!!" . PHP_EOL;

    echo "error number: $errno" . PHP_EOL;
    echo '----------------error message----------------' . PHP_EOL;
    echo $errstr . PHP_EOL;
    echo '---------------------------------------------' . PHP_EOL;

//    echo var_dump($errcontext);
    echo PHP_EOL . PHP_EOL;

    return false;
}

function errorHandler4($errno, $errstr, $errfile, $errline, $errcontext) {

    $errorFilter = error_reporting();

    if (!($errorFilter & $errno)) {
        echo 'an error appear, but it is hidden' . PHP_EOL;

        return true;
    }


    echo "in file $errfile" . PHP_EOL;
    echo "in line $errline" . PHP_EOL;
    echo "an error appears!!" . PHP_EOL;

    echo "error number: $errno" . PHP_EOL;
    echo '----------------error message----------------' . PHP_EOL;
    echo $errstr . PHP_EOL;
    echo '---------------------------------------------' . PHP_EOL;

//    echo var_dump($errcontext);
    echo PHP_EOL . PHP_EOL;

    return true;
}