<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 18:49
 *
 * 21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
    рядов, а не 5.<br><br>
    1<br>
    22<br>
    333<br>
    4444<br>
    55555</p>
 */

for($i = 1; $i<10; $i++){
    for($j=1; $j<=$i; $j++){
        echo $i;
    }
    echo PHP_EOL;
    $j=1;
}