<?php

 return [
 'text' => 'Reverce letter.',
 'paramCount' => '1',
 'func' => function($a){
		$a=explode('.',$a);
		$a = array_filter($a);
		krsort($a);
		//print_r($a);
		foreach ($a as $key=>$val){
		    echo $val.'.';
    	}
    	$res = implode(" ", $a);
    	return $res;
    },
 'paramGenerator' => function() {
 		// $dir=$_POST['a'];
 		// $fileName=$_POST['b'];
     },
 'view' => 'view/revletter.php',
];

