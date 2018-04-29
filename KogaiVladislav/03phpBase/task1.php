<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 24.04.18
 * Time: 15:50
 *
 *
 *
 * <p>1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'.
 * С помощью цикла foreach выведите эти слова в столбик.</p>
 */

$array = ['html', 'css', 'php', 'jq'];

foreach ($array as $cycle){
    echo $cycle. PHP_EOL;
}