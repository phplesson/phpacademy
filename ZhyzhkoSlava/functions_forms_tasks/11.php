<form method="post" action="11.php">
	<input type="text" name="form1">
	<input type="submit" name="button1">
</form>
<?php

function text($text){
    $b='';
    $text=mb_strtoupper(mb_substr($text,0,1)).mb_substr($text,1,strlen($text));//текст с заглавой буквы
    for($i=0;$i<mb_strlen($text);$i++){
        if($text[$i]=='.'){
            $text[$i+2]=mb_strtoupper($text[$i+2]);
        }
        $b.=$text[$i];
    }
    return $b;
}
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['button1'])){
	$a=htmlspecialchars($_POST['form1']);
    echo text($a);
}
