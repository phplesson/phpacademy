<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 22.04.18
 * Time: 6:40
 */

/*
 * short form "if" operator
 * if (<expr>) <single_statement>;
 */

$a = 10;

if ($a == 11) echo "Yes, a == 11" . PHP_EOL;
if ($a == 10) echo "Yes, a == 10" . PHP_EOL;

/*
 * make if () {} else {} with goto without {}
 */
if (is_numeric($a))
{
    echo "'a' is a number.";
    if ($a >= 0) {
        echo " And a >= 0, ";
        echo "so a is positive value";
    } else {
        echo " And a < 0, ";
        echo "so a is negative value";
    }
    echo PHP_EOL;
} else {
    echo "'a' is not a number" . PHP_EOL;
}

echo PHP_EOL . PHP_EOL;

/* first step */

if (!is_numeric($a)) goto if1else;

    echo "'a' is a number.";
    if ($a >= 0) {
        echo " And a >= 0, ";
        echo "so a is positive value";
    } else {
        echo " And a < 0, ";
        echo "so a is negative value";
    }
    echo PHP_EOL;

    goto if1end;
if1else:
    echo "'a' is not a number" . PHP_EOL;
if1end:

echo PHP_EOL . PHP_EOL;

/* second step */

if (!is_numeric($a)) goto if1else_;

    echo "'a' is a number.";


    if (!($a >= 0)) goto if2else;
        echo " And a >= 0, ";
        echo "so a is positive value";
        goto if2end;
    if2else:
        echo " And a < 0, ";
        echo "so a is negative value";
    if2end:


    echo PHP_EOL;

    goto if1end_;
if1else_:
    echo "'a' is not a number" . PHP_EOL;
if1end_:

echo PHP_EOL . PHP_EOL;


/* step 3 - decorate code with {} - for better reading */
if (!is_numeric($a)) goto if1else__;

if1__: {
    echo "'a' is a number.";


    if (!($a >= 0)) goto if2else_;
    if2: {
        echo " And a >= 0, ";
        echo "so a is positive value";
        goto if2end_;
    }
    if2else_: {
        echo " And a < 0, ";
        echo "so a is negative value";
    }
    if2end_:


    echo PHP_EOL;

    goto if1end__;    
}
if1else__: {
    echo "'a' is not a number" . PHP_EOL;
}
if1end__:
