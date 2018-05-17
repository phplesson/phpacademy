<?php

 return [
 'text' => 'Unique words in string.',
 'paramCount' => '1',
 'func' => function($str){
		if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['button1'])){
			$str=htmlspecialchars($_POST['form1']);
			$res = count(array_unique(str_word_count($str, 1)));
		}
		return $res;
    },
 'paramGenerator' => function() {
     },
 'view' => 'view/uniq.php',
];