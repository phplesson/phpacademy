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
    'paramCount' => 1,
    'func' => function($path){

        $directories = scandir($path);

        return $directories;
    },
    'paramGenerator' => function(){
        $path = 'functions_forms_tasks';
        return [$path];
    }
];