<?php

function filesInDir($dir)
{
    if (is_dir($dir)) { //являеться файл директорией?
        if ($handle = opendir($dir)) {//
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != ".." && !is_dir($file)) {
                    echo "{$file} <br> ";
                }
            }
            closedir($handle);
        }
    } else {
        die("Вы не задали параметр функции ДИРЕКТОРИЯ!");
    }
}
filesInDir('c:/xampp/htdocs');
