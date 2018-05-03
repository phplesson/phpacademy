<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 5/2/18
 * Time: 10:38 PM
 */
/*
 * 11. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом,
 * что каждое новое предложение начиняется с большой буквы.
 * */

//Функция делает первую букву строки заглавной. Корректно работает с ЮНИКОД. Сперто отсюда: http://php.net/manual/ru/function.ucfirst.php
function mb_ucfirst($str) {
    $aParts = explode(" ",$str);
    $firstWord = mb_convert_case($aParts[0],MB_CASE_TITLE,"UTF-8");
    unset($aParts[0]);

    return $firstWord." ".implode(" ",$aParts);
}

//Функция делает первую букву предложения заглавной. Можно передавать кусок текста (несколько предложений) в виде строки. Признаком разделения
//на предложения являются: [.], [?], [!], [. ], [? ], [! ]. Этот список можно дополнить!
function firstBigLetterInSentence($inString) {
    $inString = trim($inString); //удалим пробелы с начала и конца строки.
    $possibleDelimiters = array('. ', '? ', '! ', '.', '!', '?'); //массив из сочетаний, которые часто являются признаками конца предложения. Можно дополнить.
    foreach ($possibleDelimiters as $possibleDelimitersValue) {
        $workArray = array();
        $workArray = explode($possibleDelimitersValue, $inString);
        foreach ($workArray as &$workArrayValue) {
            $workArrayValue = mb_ucfirst($workArrayValue);
        }
        unset($workArrayValue);
        if(strlen(utf8_decode($possibleDelimitersValue)) == 1){
            $possibleDelimitersValue.=' '; //если разделитель состоит из одного символа (. или ? или !), то добавить к нему в конец еще и пробел.
        }
        $outString = implode($possibleDelimitersValue, $workArray);
        $inString = $outString;
    }
    unset($possibleDelimitersValue);
    $outString = preg_replace("/\s{2,}/"," ", $outString); //удалим повторяющиеся пробелы
    return($outString);
}

//Вспомогательная функция, которая будет выбирать абзацы текста из массива, чтобы потом применять к ним вышеописанные функции форматирования.
function sentenceRandChooser() {
    $textBlocks = array(
        "а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.",
        "глава    Facebook не назвал конкретных функций.он объяснил, что они будут интегрированы в основное приложение Facebook, но при желании их можно будет отключить. дейтинговые сервисы будут рекомендовать друг другу пользователей,    которые    не добавляли друг друга в друзья, и окажутся недоступны для пользователей со статусами «Женат», «Замужем» и «В отношениях».",
        "   возвращает длину строки?обработка строк.PHP Manual! сайт посвящен документации по PHP.русифицированное руководство с примерами на PHP. фреймворки, шаблонизаторы, набор часто употребляемых функций.",
        "среди автолюбителей довольно распространено мнение,   что единственной причиной обращения в автосервис может быть поломка автомобиля.однако грамотное профилактическое обслуживание и плановая замена запчастей может предотвратить более серьёзную поломку.",
    );
    $oneCellArray[0]=$textBlocks[rand(0, 3)]; //преобразуем строку в массив из одной ячейки, чтобы сохранить однотипность блоков в index.php
    return($oneCellArray);
}

$firstBigLetterInSentence_Alias = 'firstBigLetterInSentence';
$sentenceRandChooser_Alias = 'sentenceRandChooser';

$interfaceArray = array(
    'text' => 'Задача 11. Функция, которая начинает предложение с большой буквы. Разделителем предложений могут быть: [.], [?], [!], [. ], [? ], [! ]',
    'paramCount' => '1',
    'func' => $firstBigLetterInSentence_Alias,
    'paramGenerator' => $sentenceRandChooser_Alias,
);

return ($interfaceArray);