<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 05.05.18
 * Time: 16:59
 */

return [
  'text' => 'функция поиска одинаковых слов в формах',
  'paramCount' => 2,
  'func' => function($text_first, $text_second){
    $arrayFirst = explode(' ',$text_first);
    $arraySecond = explode(' ',$text_second);
    return array_intersect($arrayFirst,$arraySecond);

  },
    'paramGenerator' => function(){
    $array_first = 'text one two belong belive ';
    $array_second = 'text one twowwww crash five second belive';
    return [$array_first, $array_second];
    }
];