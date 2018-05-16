<?php
$arr = ['January','February', 'March', 'April','May','June','July','August','September','October', 'November','December'];
$month = getdate(time());
foreach ($arr as $e){
    if ($e == $month['month']) {
        echo '<b>' . "{$e} " . '</b>';
    }
    else {
        echo "{$e} ";
    }
}

