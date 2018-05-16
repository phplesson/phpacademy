<?php

 // 21. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
//xx<br>
//xxxx<br>
//xxxxxx<br>
//xxxxxxxx<br>
//xxxxxxxxxx</p>



for ($a = 1; $a <= 9; $a++)


{
    for ($b = 1; $b <= $a; $b++)


    {
        echo $a;
    }


    echo "  ".PHP_EOL;
}