<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 25.04.2018
 * Time: 12:16
 */
/**  Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.
 */

$array = array ('html', 'css', 'php', 'jq');

foreach ($array as $itemValue) {
    echo $itemValue. PHP_EOL;
}