<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 18:40
 *
 *
 * 20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
 *   рядов, а не 5.
 * x<br>
   xx<br>
   xxx<br>
   xxxx<br>
   xxxxx</p>
 */
for($i = 1; $i<21; $i++){
    for($j=1; $j<=$i; $j++){
        echo 'x';
    }
    echo PHP_EOL;
    $j=1;
}