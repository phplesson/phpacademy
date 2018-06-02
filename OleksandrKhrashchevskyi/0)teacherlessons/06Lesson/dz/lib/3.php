<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.05.18
 * Time: 7:40
 */

return [
    'description' => 'function return current time',
    'func' => function() {
        return [
            'currentTime' => date('Y-m-d H:i:s'),
            'currentTimeZone' => date('T'),
            'fromGreenwich' => date('P'),            
        ];
    },
    'paramGenerator' => function () {
        return [];
    },
    'argCount' => 0,
    'view' => 'view/time.php',
];