<?php
for ($var=1; $var<=10; $var++) {
    echo "$var <br>";
    for ($var_p=1; $var_p<=10; $var_p++){
        $rez = $var*$var_p;
        echo "$var * $var_p = $rez <br>";
    }
}
?>