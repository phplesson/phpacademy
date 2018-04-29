<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 16.04.18
 * Time: 0:21
 *
 *
 *
 * 4 - придумаем, простой калькулятор.
 *    из командной строки вводят три параметра, первое число, второе, и действие словом(add,sub,mult,div)
 *    программа выдаёт ответ арифметического действия с указанными числами.
 *    учесть, что на ноль делить нельзя, учесть что действие может быть неверно заданно.
 */




/**
 * a - первое число, b - второе, c- действие
 * названо так что бы в консоль удобнее вводить было
 * правильнее было бы назвать так:
 * numFirst, numSecond, mathCalc, к примеру
*/
$options = getopt('a:b:c:');

$a = $options['a'];
$b = $options['b'];
$c = $options['c'];

/**
 * Проверка для переменных a и b являются ли числами (даже если число стринговое)
 * если к примеру a стринговое число,  b обычное число посчитает нормально
 * НО если а="str" и b будет числом выдаст ошибку и скажет что а или b не являются числами
 */
if(is_numeric($a) and is_numeric($b)){
    if($c == 'add' or $c == 'sub' or $c == 'mult' or $c == 'div'){
        switch ($c) {
            case "add":
                /**
                 * Сумма сделана по другому потому что PHP воспринимает точку перед суммой как
                 * конкатенацию(сложение строк)
                 */
                $sum = $a + $b;
                echo "Result of addition = ". $sum .PHP_EOL;
                break;
            case "sub":
                echo "Result of subtraction = ". $a - $b .PHP_EOL;
                break;
            case "mult":
                echo "Result of multiplication = ". $a * $b .PHP_EOL;
                break;
            case "div":
                {
                    if($b != 0){
                        echo "Result of division = ". $a / $b .PHP_EOL;
                    } else echo "You trying to division by zero!!" .PHP_EOL;
                }
                break;
        }
    } else echo "Please enter(add/sub/mult/div): add = plus; sub = minus; mult = times; div = divided by!" .PHP_EOL;
} else echo "a or b - not a number!" .PHP_EOL;
