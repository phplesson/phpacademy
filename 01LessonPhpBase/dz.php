<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 15.04.18
 * Time: 10:26
 */

/* Важные команды */

/**
 * прекращение работы
 */
echo 'works';
exit();

/**
 * Вывод содержимого(значения) на экран
 */

echo 'some data as string' . PHP_EOL;

/**
 * Вывод переменной - значение и тип(используеться для отладки=для исправления ошибок в коде)
 */

$value = 100;
var_dump($value);




/**
 * PHP_EOL - константа которая содержит символ окончания строки
 *
 * для сравнения
 *
 */

echo 'first line';
echo 'second line';
echo '-----------';

echo PHP_EOL . '==================================' . PHP_EOL;

echo 'first line' . PHP_EOL;
echo 'second line' . PHP_EOL;
echo '-----------' . PHP_EOL;

/**
 * работа с переменными
 */

$i1 = 100;
$i2 = 10;
$i3 = 2;

$s1 = 'string1';
$s2 = 'string2';
$s3 = 'string2';

$i1Plusi2 = $i1 + $i2;

echo 'i1=' . $i1 . PHP_EOL;
echo 'i2=' . $i2 . PHP_EOL;
echo 'i1+i2=' . $i1Plusi2 . PHP_EOL;
echo 'i1+i2=' . ($i1 + $i2) . PHP_EOL;

echo '-----STRINGS ------ ' . PHP_EOL;

$allStringsInSingleLine = $s1 . $s2 . $s3 . PHP_EOL;
$allStringsInThreeLines = $s1 . PHP_EOL . $s2 . PHP_EOL . $s3 . PHP_EOL;

echo 'In single line' . PHP_EOL;
echo $allStringsInSingleLine;

echo PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL;

echo 'In three lines' . PHP_EOL;
echo $allStringsInThreeLines;



/**
 * сравнить
 */

$a = 1;
$s = '1';
$f = true;

echo 'USE echo ' . PHP_EOL . PHP_EOL;

echo 'a=' . PHP_EOL;
echo 's=' . PHP_EOL;
echo 'f=' . PHP_EOL;

echo PHP_EOL . PHP_EOL;

echo 'USE var_dump()' . PHP_EOL . PHP_EOL;

var_dump($a);
var_dump($s);
var_dump($f);

/**
 * операции для чисел                 + - * /       (сложить, вычесть, умножить, разделить)
 * операции для строк                  .            (обьеденить/соеденить две строки в одну)
 *
 * операции сравнения                 > < == != >= <=  (больше, меньше, равно, неравно, большеИЛИравно, меньшеИЛИравно)
 *
 */


$a = 10;
$b = 20;
$c = 0;


if ($b != 0) {
    echo 'a/b=' . ($a / $b) . PHP_EOL;
} else {
    echo 'b=0, we can not divide by zero' . PHP_EOL;
}

if ($c != 0) {
    echo 'a/c=' . ($a / $c) . PHP_EOL;
} else {
    echo 'c=0, we can not divide by zero' . PHP_EOL;
}

/**
 * другой пример
 */

$doIfTrue = (100 > 2);

if ($doIfTrue) {
    echo "do1 because it is true" .PHP_EOL;
}

$doIfTrue = (100< 2);

if ($doIfTrue) {
    echo "do2 because it is true" .PHP_EOL;
}

$doIfNotTrue = (100 > 2);

if ($doIfNotTrue) {

} else {
    echo "do3 because it is not true" .PHP_EOL;
}

$doIfNotTrue = (100< 2);

if ($doIfNotTrue) {

} else {
    echo "do4 because it is not true" .PHP_EOL;
}

/**
 * условие в условии
 */

define('GENDER_MALE', 1);
define('GENDER_FEMALE', 2);

$age = 20;
$gender = GENDER_MALE;
$prefer = GENDER_MALE;


//is aged over 18 ?

if ($age >= 18) {
    if ($gender == GENDER_MALE) {                                           // is male
        if ($prefer == GENDER_MALE) {
            echo 'SRAMOTA' . PHP_EOL;
            exit();
        }

        echo 'see nice video with sexy woman' . PHP_EOL;
    } else {
        if ($prefer == GENDER_MALE) {                                       //is female
            echo 'see nice video - wife and husband have a rest' . PHP_EOL;
        } else {
            echo 'OH MY GOD, you are bad girl' . PHP_EOL;
        }
    }
} else {
    echo 'you are too young' . PHP_EOL;
}

/**
 * как проработать файл. сейчас если его запустить (команда php <имя пхп файла> ...   php dz.php)
 * файл выполняться не будет, так как самая первая команда - это команда выхода.
 *
 * перемещая команду выхода вниз по файлу, прорабатываем файл - смотрим что выводится,
 * меняем чтото, смотрим как поменялся вывод программы.
 *
 *
 * если в какомто месте сложно понять, изза того что не понятно, что именно хранится в переменной
 * вставляем var_dump($<variableName>);
 * и смотрим, что именно в этом месте кода будет хранится в переменной.
 *
 */


/**    Input data */

// a , b - means need -a<value> -b<value> parameters
// so run script as `php 1.php -a100 -b20`
$options = getopt('a:b:');
$a = $options['a'];
$b = $options['b'];

/**
 * if need extra parameter c do
 *
 * CHANGE $options = getopt('a:b:c:');
 * ADD $c = $options['c'];
 *
 * So, for every <x> parameter you should add "x:" into string like this $options = getopt('a:b:');
 * and add line $x = $options['x'];
 */




/**
 *  домашнее задание, как и говорили - выбрать себе три школьные задачи по гемотетрии, алгебере , физике -
 *  где решение содержит простые арифметические действия, и возможно условие - разное решение, взависимости
 *  от условия. Или придумать что нибудь своё
 *
 *
 *
 *
 *
 * 1 - посчитать сопротивление схемы
 *
 *    ---Р1---Р2-
 *    |         |
 * --------Р3-------
 * 
 * сопротивления резисторов задаются в командной строке параметрами абс
 *
 *
 * 2 - на какую высоту улетит предмет массой М, если по нему ударили сверху с силой Ф1,
 *     и снизу с силой Ф2(считать время удара 1 секунда)
 *
 *     !! надо учесть, что если сила сверху больше чем сила снизу, то предмет вообще
 *     верх не полетит.
 *
 * 3 - у нас есть пол литра алкоголя - А градусов, мы его разбавляем кокаколой
 *    в отношении 1 к 1, сколько можно докинуть кубиков льда(один кубик 1 гр льда)
 *    чтобы даже если он целиком растает, крепость не стала ниже Б градусов
 *
 *    тоже надо учесть, что уже после разбавления колой, крепость может получиться ниже Б
 *    или равной Б
 *
 * 4 - придумаем, простой калькулятор.
 *    из командной строки вводят три параметра, первое число, второе, и действие словом(add,sub,mult,div)
 *    программа выдаёт ответ арифметического действия с указанными числами.
 *    учесть, что на ноль делить нельзя, учесть что действие может быть неверно заданно.
 */


/**
 * для калькулятора понадобится следующая форма условнойго оператора
 *
 *
 */

$a = 18;

if ($a > 18) {
    echo 'you are big' . PHP_EOL;
} elseif ($a == 18) {
    echo '18 it is nice age' . PHP_EOL;
} elseif ($a < 0) {
    echo 'it is impossible' . PHP_EOL;
} elseif ($a == 0) {
    echo 'you are baby' . PHP_EOL;
} else {
    //only A is not greater then 18, not equal both 18 and 0, and not less then 0
    //so A is between 1 and 17
    echo 'you are child' . PHP_EOL;
}
