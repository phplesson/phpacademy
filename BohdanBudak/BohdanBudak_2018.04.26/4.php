<!--
/** 4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.
*/
 -->
<?php
function current_dir($dir){
    return scandir($dir);
}
print_r(current_dir(__DIR__));
