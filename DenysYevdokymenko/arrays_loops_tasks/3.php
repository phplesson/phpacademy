<?php
$array = [26, 17, 136, 12, 79, 15];
$result = 0;
foreach ($array as $value){
    $result = $result + pow($value,2);
    }
echo "$result <br>";