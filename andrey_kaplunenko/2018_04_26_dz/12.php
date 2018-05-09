<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 5/5/18
 * Time: 8:06 PM
 */

/*
 * 12. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что предложения идут в обратном порядке.
 * */
function sentencesFromLastToFirst($inString) {
    $inString = trim($inString); //удалим пробелы с начала и конца строки.
    $workingArray = preg_split("/[.?!]+/", $inString); //разобьем по признаку .?! хотя складывать обратно будем через точку. Как сложить обратно сохранив исходные знаки препинания это однако вопрос...
    //последний элемент массива обычно пуст, так как точка стоит в конце абзаца и после нее ничего нет.
    //однако на всякий случай пройдемся по всем элементам и удалим пустые, нам ведь не жалко...
    foreach ($workingArray as $key => $value){
        if(empty($value)) unset($workingArray[$key]);
    }
    foreach ($workingArray as &$value){ //здесь передача value по ссылке так как мы хотим менять value внутри конструкции foreach
        $value = trim($value);          //подрежем пробелы в начале и в конце подстроки, если таковые вдруг затесались
        $value.='.';                    //дополним подстроки точками в конце
    }
    $reversedArray = array_reverse($workingArray); //выполним собственно условие задачи...
    return(implode(' ', $reversedArray));
}

$sentencesFromLastToFirst_Alias = 'sentencesFromLastToFirst';

if (!function_exists('sentenceRandChooser')) {
    function sentenceRandChooser()
    {
        $textBlocks = array(
            "а Васька слушает да ест.    а воз и ныне там? а вы друзья как ни садитесь, все в музыканты не годитесь! а король-то — голый. а ларчик просто открывался. а там хоть трава не расти.",
            "глава    Faceboooooook не назвал конкретных функций.",
            "   обработка строк? PHP Manual! сайт посвящен документации по PHP.русифицированное руководство с примерами на PHP. ",
            "среди автолюбителей довольно распространено мнение,   что единственной причиной обращения в автосервис может быть поломка автомобиля. однако это не совсем,  так",
        );
        $oneCellArray[0] = $textBlocks[rand(0, 3)]; //преобразуем строку в массив из одной ячейки, чтобы сохранить однотипность блоков в index.php
        return ($oneCellArray);
    }
}

$sentenceRandChooser_Alias = 'sentenceRandChooser';

$interfaceArray = array(
    'description' => 'Задача 12. Функция, форматирует строку так, что предложения идут в обратном порядке. Разделителем могут являться [.] [?] [!], но склейка все равно через точку...',
    'argCount' => '1',
    'func' => $sentencesFromLastToFirst_Alias,
    'paramGenerator' => $sentenceRandChooser_Alias,
);

return ($interfaceArray);