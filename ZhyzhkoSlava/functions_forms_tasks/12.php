
<?php
$a='А Васька слушает да. ест А воз и ныне. там А вы друзья как ни садитесь, все в музыканты не. годитесь';
$a=explode('.',$a);
$a = array_filter($a);
krsort($a);
//print_r($a);
foreach ($a as $key=>$val){
    echo $val.'.';
}

