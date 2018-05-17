<?php
$arr = ['Monday', 'Tuesday', 'Wednesday','Thursday','Friday','Saturday','Sunday'];
$day = getdate(time());
foreach ($arr as $d){
    if ($d == $day['weekday']) {
        echo '<i>' . "{$d}" . '</i>, ';
    }
    else {
        echo "{$d}, ";
    }
}

