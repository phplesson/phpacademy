<?php
$arr = ['Monday', 'Tuesday', 'Wednesday','Thursday','Friday','Saturday','Sunday'];
//$day = getdate(time());
foreach ($arr as $d){
    if ($d == 'Saturday' || $d == 'Sunday') {
        echo '<b>' . "{$d} " . '</b>';
    }
    else {
        echo "{$d} ";
    }
}

