<?php

 return [
 'text' => 'функция которая складывает два числа',
 'paramCount' => '2',
 'func' => function($a, $b) {return $a + $b;},
 'paramGenerator' => function() {return [rand(1, 10), rand(1, 10)];},
 ]

?>