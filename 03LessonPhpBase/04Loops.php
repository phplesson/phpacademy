<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21.04.18
 * Time: 4:20
 */

/*
 * for(<expr1>; <expr2>; <expr3>) { ... }
 * 
 * while(<expr>) { ... }
 * 
 * do { ... } while(<expr>);
 */


for($i = 0; $i <= 10; $i++) {
    echo "$i, ";
}

echo PHP_EOL;




    
$i = 0;
while($i <= 10) {
    echo "$i, ";
    $i++;
}

echo PHP_EOL;






$i = 0;
do {
    echo "$i, ";
    $i++;
}while($i <= 10);

echo PHP_EOL;