<?php

 //$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня груша груша';

// $string=explode(' ',$string);
// $string=array_count_values($string);
// arsort($string);
// foreach($string as $key=>$value){
//     echo $key.' - '.$value."\n";
// }

 return [
 'text' => 'Count elem.',
 'paramCount' => '1',
 'func' => function($string){
		$string=explode(' ',$string);
		$string=array_count_values($string);
		arsort($string);
		foreach($string as $key=>$value){
		    echo $key.' - '.$value."\n";
		}
		// $res = implode(" ", $string);
		return var_dump($string);
    },
 'paramGenerator' => function() {
 		// $dir=$_POST['a'];
 		// $fileName=$_POST['b'];
     },
 'view' => 'view/count.php',
];