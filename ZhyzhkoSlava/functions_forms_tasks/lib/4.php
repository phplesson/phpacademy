<?php

 return [
 'text' => 'Search files in given directory',
 'paramCount' => '1',
 'func' => function($dir){
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
    },
 'paramGenerator' => function() {
 		//$dir = $_POST['a'];
     },
 'view' => 'view/filesindir.php',
];
