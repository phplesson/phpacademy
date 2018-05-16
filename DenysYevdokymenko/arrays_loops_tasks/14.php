<?php
$array = [  4, 2, 5, 19, 13, 0, 10];

foreach ($array as $e){
    if ($e == 2 || $e == 3 || $e == 4 ) {
        echo "{$e} - Есть!" . '<br>';
    }
    else {
        echo "{$e} - Нет!" . '<br>';
    }
}
