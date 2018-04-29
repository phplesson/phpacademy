<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 18:51
 * 22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
    xx<br>
    xxxx<br>
    xxxxxx<br>
    xxxxxxxx<br>
    xxxxxxxxxx</p>
 */

for($i = 2; $i<16; $i++){
    for($j=1; $j<=$i; $j++){
        echo 'x';
    }
    echo PHP_EOL;
    $j=1;
}