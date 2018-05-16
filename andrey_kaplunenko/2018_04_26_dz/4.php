
<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 5/8/18
 * Time: 9:30 PM
 */
/*
 * 4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.
 * */

$interfaceArray = array(
    'description' => 'Задача 4. Функция, выводит список файлов в заданной директории.',
    'argCount' => '1',
    'func' => function ($path=__DIR__) {
        $filesArray = scandir($path);
        return(implode(' ', $filesArray));
    },
    'paramGenerator' => function () {
        $paths = array(
            __DIR__,
            __DIR__.'/..',
            '/',
        );
        $oneCellArray[0] = $paths[rand(0, 2)]; //преобразуем строку в массив из одной ячейки, чтобы сохранить однотипность блоков в index.php
        return ($oneCellArray);
    },
);

return ($interfaceArray);