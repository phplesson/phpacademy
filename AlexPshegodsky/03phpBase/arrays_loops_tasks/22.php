<?php
// Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.
// xx
// xxxx
// xxxxxx
// xxxxxxxx
// xxxxxxxxxx

$i = 0;

while ($i < 5) {

    $j = 0;
    while ($j <= $i) {
        echo 'xx';
        $j++;
    }
    echo PHP_EOL;
    $i++;
}