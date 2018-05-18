
<?php

 return [
 'text' => 'Function show all files in dir with given extention.',
 'paramCount' => '2',
 'func' => function($dir, $fileName){
        if (is_dir($dir)) {
        if ($handle = opendir($dir)) {
            while (false !== ($file = readdir($handle))) {
                if ($file != "." && $file != ".." && !is_dir($file) && strstr($file, $fileName) == true) {
                    $result[] =  "{$file} <br> ";
                }
            }
            closedir($handle);
        }
    	} else {
        	die("Вы не задали параметр функции ДИРЕКТОРИЯ!");
    	}
    	$res = implode("<br>", $result);
    	return $res;
    },
 'paramGenerator' => function() {
 		$dir=$_POST['a'];
 		$fileName=$_POST['b'];
     },
 'view' => 'view/fileindirwithext.php',
];