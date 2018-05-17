<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$i = 0;
foreach ($arr as $e){
    if ($i<3){
        echo "{$e}, ";
        $i++;
    }
    else {
        echo '<br>' . "{$e}, ";
        $i = 1;
    }
}

