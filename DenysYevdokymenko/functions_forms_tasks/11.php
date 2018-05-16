<?php
function text($text,$enc = "utf-8"){
    $b='';
    $text = mb_convert_case(mb_substr($text,0,1,$enc), MB_CASE_UPPER, $enc).mb_substr($text,1,mb_strlen($text),$enc);//текст с заглавой буквы
    for($i=0;$i<mb_strlen($text, $enc);$i++){
        if($text[$i]=='.'){
            $text[$i+2]=mb_convert_case($text[$i+2],MB_CASE_UPPER, $enc);
        }
        $b.=$text[$i];
    }
    return $text;
}
$a='а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то  голый. а ларчик просто открывался. а там хоть трава не расти';
$b='privet. eto pervoe predlogenie. eto vtoroe. eto tretie. a potom - ewe raz pjatoe. ewe pradlogenie. ewe pradlogenie. ewe pradlogenie. ewe pradlogenie. ewe pradlogenie. ewe pradlogenie';
echo text($a), '<br>';
echo text($b),'<br>';


$string = "привет";
$char = mb_strtoupper(substr($string,0,2), "utf-8"); // это первый символ
$string[0] = $char[0];
$string[1] = $char[1];
echo $string;