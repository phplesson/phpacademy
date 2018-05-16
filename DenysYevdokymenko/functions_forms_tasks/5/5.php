<?php
/**
 * Created by PhpStorm.
 * User: fiksa
 * Date: 07.05.2018
 * Time: 20:28
 */
if ($_POST) {
    $dir = $_POST['dir'];
    $fileName = $_POST['fileName'];
}

function filesInDir($dir, $fileName){
    if (is_dir($dir)&& ($fileName != null)){
        if ($handle = opendir($dir)){
            while (false !== ($file = readdir($handle))){
                if ($file != "." && $file!=".."&& !is_dir($file) && (strstr($file, $fileName) == true)){
                    echo "<li> $file </li>";
                }
            }
            closedir($handle);
        }
    } else die ("Не задан параметр директории или искомое слово!");
}

echo "Еще один список: <br>";
filesInDir($dir,$fileName);

