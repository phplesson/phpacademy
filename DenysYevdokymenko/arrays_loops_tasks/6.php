<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key => $value) {
    $en[] = $key;
    $ru[] = $value;
}
print_r($en);
echo PHP_EOL . '<hr>';
print_r($ru);




