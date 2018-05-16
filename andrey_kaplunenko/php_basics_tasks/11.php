<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/22/18
 * Time: 11:42 PM
 */
$day = 5;
switch (true) {
    case ($day >= 1 && $day <= 5): //case выполнится когда выражение в нем будет равно выражению в switch, то есть true
        echo "This is working day.".PHP_EOL;
        break;
    case ($day >= 6 && $day<= 7):
        echo "This is holiday.".PHP_EOL;
        break;
}