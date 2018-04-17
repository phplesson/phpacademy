<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/17/18
 * Time: 10:01 PM
 */
if ($argc!=4) {
    echo "This php script will help you to solve quadratic equation
    reduced to the generic form: Ax^2 + Bx + C = 0;
    Just input A, B and C, and you'll obtain two (if possible)
    roots - X1 and X2.
    Usage: php quad_eq.php [A] [B] [C]\n";
} else {
    $A = $argv[1];
    $B = $argv[2];
    $C = $argv[3];
    $Discrim = 0.0;
    $X1 = 0.0;
    $X2 = 0.0;

    if (!is_numeric ($A)) {
        echo "Argument A is not numeric. We're closing...\n";
        exit ();
    }

    if (!is_numeric ($B)) {
        echo "Argument B is not numeric. We're closing...\n";
        exit ();
    }

    if (!is_numeric ($C)) {
        echo "Argument C is not numeric. We're closing...\n";
        exit ();
    }

    $Discrim = $B**2-4*$A*$C;

    if ($Discrim < 0) {
        echo "Discriminant is ".$Discrim." and this is less than 0.
            So, equation does not have solutions in REAL numbers. Sorry for that :(\n";
        exit ();
    } else {
        $X1 = (-$B+sqrt($Discrim))/(2*$A);
        $X2 = (-$B-sqrt($Discrim))/(2*$A);
        echo "X1 (solution one) = ".$X1."\n";
        echo "X2 (solution two) = ".$X2."\n";
    }
}