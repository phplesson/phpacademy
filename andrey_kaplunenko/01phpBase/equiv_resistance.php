<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/17/18
 * Time: 11:33 PM
 */
if ($argc!=4) {
    echo "\nUsage of equiv resistance calculator:
    -----R1---R2-----
      |           |
      |           |
    --------R3-------
    put R1, R2 and R3 (in Ohms) as command line parameters.\n
    Example:
        php equiv_resistance.php [R1] [R2] [R3]\n\n";
} else {
    $R1 = $argv[1];
    $R2 = $argv[2];
    $R3 = $argv[3];
    $EquivResistance = 0;

    if ($R1<0 || $R2<0 || $R3<0) {
        echo "Resistance can't be less than 0! We're closing...\n";
        exit ();
    } elseif ($R3 == 0) {
        echo "Equivalent resistance = 0, because R3 = 0.\n";
        exit ();
    } elseif ($R1+$R2 == 0) {
        echo "Equivalent resistance = 0, because R1+R2 = 0.\n";
        exit ();
    } else {
            $EquivResistance = 1/(1/($R1+$R2) + 1/$R3);
            echo "Equivalent resistance = ".$EquivResistance."[Ohms]\n";
        }
    }
