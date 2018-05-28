<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 14.05.18
 * Time: 21:24
 * <p>4. Написать функцию, которая выводит список файлов в заданной директории.
 * Директория задается как параметр функции.</p>

 */
return [
    'text' => 'функцию, которая выводит список файлов в заданной директории',
    'paramCount' => 2,
    'func' => function($dir){
        $files = @scandir($dir);

        if ($files) {
            $result = [];
            foreach ($files as $file) {
                if (is_file($dir . DIRECTORY_SEPARATOR . $file)) {
                    $result[] = $file;
                }
            }
        } else {
            $result = false;
        }

        return $result;
    },
    'paramGenerator' => function(){
        $path = 'functions_forms_tasks';
        return [$path];
    }
];