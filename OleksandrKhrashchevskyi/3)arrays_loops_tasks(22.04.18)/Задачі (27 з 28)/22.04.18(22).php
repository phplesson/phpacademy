<?php


// 22.Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
//xx<br>
//xxxx<br>
//xxxxxx<br>
//xxxxxxxx<br>
//xxxxxxxxxx</p>


for($a = 1; $a <= 6; $a++)


{
    for($b=1; $b<=$a; $b++)


    {

        echo 'XX';

    }

    echo "" .PHP_EOL;
}