<?php

 return [
 'text' => 'Revert given string.',
 'paramCount' => '1',
 'func' => function($arg){

 	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['button1'])){
		$arg=htmlspecialchars($_POST['form1']);
	    $res = strrev($arg);
		//echo strrev($arg);
	}
	return $res;
	
    },
 'paramGenerator' => function() {
 		// $dir=$_POST['a'];
 		// $fileName=$_POST['b'];
     },
 'view' => 'view/revert.php',
];