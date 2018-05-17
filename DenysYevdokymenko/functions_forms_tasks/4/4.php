<?php
/**
 * Created by PhpStorm.
 * User: fiksa
 * Date: 07.05.2018
 * Time: 20:28
 */
include '4.html';
if ($_POST) {
    $dir = $_POST['dir'];
}

function getDir($dir){
return scandir($dir);
}

function filesInDir($dir){
    if (is_dir($dir)){
        if ($handle = opendir($dir)){
            while (false !== ($file = readdir($handle))){
                if ($file != "." && $file != ".." && !is_dir($file)){
                    echo "<li> $file </li>";
                }
            }
            closedir($handle);
        }
    } else die ("Не задан параметр директории!");
}

echo '<h3> Содержимое текущей директории: </h3><ul>';
foreach (getDir($dir) as $word){
    echo "<li>{$word}</li>";
}
echo '</ul>';

echo "Еще один список: <br>";
filesInDir($dir);
var_dump(DIRECTORY_SEPARATOR);

