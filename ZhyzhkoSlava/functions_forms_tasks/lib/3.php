<?php

return [
    'description' => 'function return all words that longer than N',
    'func' => function() {
        return   
            $text = file_get_contents('./3.txt');

            $arr=(explode(' ',$text));
            for ($i = 0; $i < count($arr); $i++) {
                if ((mb_strlen($arr[$i])<=($lenght_world))){
                 unset($arr[$i]);
                 }
            }
            $arr2 = (implode(" ", $arr));
            return($arr2);                
    },
    'paramGenerator' => function () {
        $lenght_world=$_POST['a'];
    },
    'argCount' => 0,
    'view' => 'view/dellen.php',
];
