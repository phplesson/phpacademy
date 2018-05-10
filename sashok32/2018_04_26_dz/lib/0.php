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
        1 => 'common words',
        2 => 'TOP3',
        4 => 'Files and directories',
		
    ],
];