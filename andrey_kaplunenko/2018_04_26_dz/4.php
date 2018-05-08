
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

function filesArray($path=__DIR__) {
    $filesArray = scandir($path);
    return(implode(' ', $filesArray));
}

$filesArray_Alias = 'filesArray';

if (!function_exists('randPathChooser')) {
    function randPathChooser()
    {
        $paths = array(
            __DIR__,
            __DIR__.'/..',
            '/',
                    );
        $oneCellArray[0] = $paths[rand(0, 2)]; //преобразуем строку в массив из одной ячейки, чтобы сохранить однотипность блоков в index.php
        return ($oneCellArray);
    }
}

$randPathChooser_Alias = 'randPathChooser';

$interfaceArray = array(
    'text' => 'Задача 4. Функция, выводит список файлов в заданной директории.',
    'paramCount' => '1',
    'func' => $filesArray_Alias,
    'paramGenerator' => $randPathChooser_Alias,
);

return ($interfaceArray);