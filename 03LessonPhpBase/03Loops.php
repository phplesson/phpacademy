<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21.04.18
 * Time: 3:47
 */

/*
 * for loop
 *
 * some code>;
 * }for(<expr1>; <expr2>; <expr3>) {
 *      <
 */

for ($i = 0; $i < 10; $i++) {
    echo $i . ', ';
}

echo PHP_EOL;



for ($i = 0; $i < 10;) {
    echo $i . ', ';
    $i++;
}

echo PHP_EOL;



$i = 0;
for (; $i < 10;) {
    echo $i . ', ';
    $i++;
}

echo PHP_EOL;





$i = 0;
for (;;) {
    if ($i == 10) {
        break;
    }
    
    echo $i . ', ';
    
    $i++;
}

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;





for($i = 0, $j = 0, $k = 0; $i < 10 && $j < 10 && $k < 10; $i++, $j++, $k++) {
    echo "$i$j$k, ";
}
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;




for ($i = 0; $i < 10; $i ++) {
    
    if ($i != 5) {
        echo $i . ', ';
    }    
}

echo PHP_EOL;



for ($i = 0; $i < 10; $i ++) {
    if ($i == 5) {
        continue;
    }
    
    echo $i . ', ';
}

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;







for($i = 1; $i < 100; $i++) {
    
    $simple = true;
    
    for($j = 1; $j < $i; $j++) {
        if ($j == 1) {
            continue;
        }
        
        $div = (int)($i / $j);
        
        if (($i / $j) == $div) {
            $simple = false;
            break;
        }
    }
    
    if (!$simple) {
        continue;
    }
    
    echo "$i, ";
}

echo PHP_EOL;

exit();