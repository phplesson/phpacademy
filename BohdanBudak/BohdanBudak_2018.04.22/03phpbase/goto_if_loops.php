<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 28.04.2018
 * Time: 16:30
 */
/** взять любой пример с каждым типом цикла(for while do-while) - и спомощью
 * обыного if и goto воосоздать логику работы.*/
/** №1. Вывести числа.
for($i=1; $i<=3; $i++){
echo "The number is - $i".PHP_EOL;
}*/
$i = 1;
start1:{
        echo"The number is - $i".PHP_EOL;
        $i++;
    }
if ($i <= 3)  goto start1;

echo PHP_EOL . PHP_EOL . PHP_EOL;

/** №2. Выведите столбец чисел в промежутке от нуля до 100.
$a = 1;
while ($a <= 100) {
        echo "$a " . PHP_EOL;
        $a++;
} */

$a = 1;
start2:{
    echo "$a " . PHP_EOL;
    $a++;
}
if ($a <= 100)  goto start2;
echo PHP_EOL . PHP_EOL . PHP_EOL;

/**№3.Выведите столбец чисел от 11 до 33.

$b = 11;
do {
    echo $b . PHP_EOL;
    $b++;
} while ($b <= 33); */

$b = 11;

start3: {
    echo $b . PHP_EOL;
    $b++;
}

if ($b <= 33) goto start3;

