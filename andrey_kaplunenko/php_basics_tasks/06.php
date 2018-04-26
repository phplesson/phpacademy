<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/22/18
 * Time: 10:13 PM
 */
$name = "Andrey";
$age = 35;
echo "My name is ".$name.", I'am ".$age." years old.".PHP_EOL;
if ($age >= 18 && $age <= 59) {
    echo "You still need to work and work for years!".PHP_EOL;
} elseif ($age > 59) {
    echo "You must retire.".PHP_EOL;
}