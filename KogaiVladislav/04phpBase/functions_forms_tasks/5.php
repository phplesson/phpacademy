<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 14.05.18
 * Time: 21:24
 * <p>5. Написать функцию, которая выводит список файлов в заданной директории,
 * которые содержат искомое слово.  Директория и искомое слово задаются как параметры функции.</p>

 */
return [
    'text' => 'функцию, которая выводит список файлов в заданной директории по поиску',
    'paramCount' => 1,
    'func' => function($dir, $word){
        $files = @scandir($dir);

        if ($files) {
            $result = [];
            foreach ($files as $file) {
                if (is_file($dir . DIRECTORY_SEPARATOR . $file) && mb_stripos($file, $word) !== false) {
                    $result[] = $file;
                }
            }
        } else {
            $result = false;
        }

        return $result;
    },
    'paramGenerator' => function(){
        $dir = 'functions_forms_tasks';
        $word = '5';
        return [$dir, $word];
    }
];