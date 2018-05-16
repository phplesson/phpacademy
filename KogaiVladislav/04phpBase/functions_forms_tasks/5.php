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

        $arr=(scandir($dir));
        for ($i = 0; $i < count($arr); $i++) {
            $pos=strpos($arr[$i],$word);
            if($pos!==false){
                $result[]=$arr[$i];
            }
        }return $result;
    },
    'paramGenerator' => function(){
        $dir = 'functions_forms_tasks';
        $word = '5';
        return [$dir, $word];
    }
];