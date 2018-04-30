<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 25.04.2018
 * Time: 12:20
 */
/** Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx</p> */

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