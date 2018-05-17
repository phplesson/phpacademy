<?php
$array = [ 2, 5, 9, 15, 0, 4];

foreach ($array as $value){
    if ($value > 3 && $value < 10)
    {
        echo "{$value}".'<br>';
    }
}

