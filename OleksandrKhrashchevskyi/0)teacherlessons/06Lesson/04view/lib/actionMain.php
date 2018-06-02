<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.05.18
 * Time: 9:13
 */
function action() {
    return [
        'actionList' => [
            'current time' => 'action=time',
            'calculate md5' => 'action=md5&text=it is my text',
        ],
        'view' => 'main.php',
    ];
}