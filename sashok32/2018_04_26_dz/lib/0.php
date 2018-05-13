<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.05.18
 * Time: 23:44
 */

return [
    'description' => 'list of tasks',
    'func' => function() {
        return null;
    },
    'paramGenerator' => function () {
        return [];
    },
    'argCount' => 0,
    'view' => 'view/menu.php',
    'actionList' => [
        0 => 'menu',
        1 => '1) common words',
        2 => '2) TOP3',
        4 => '4) Files and directories',
		5 => '5) Files and directories for keywords',
		9 => '9) Reverse stroke',
		10 => '10) Count unique words',
		11 => '11) First capital letter',
		12 => '12) Reverse sentences',
		13 => '13) Count common words',
		
    ],
];