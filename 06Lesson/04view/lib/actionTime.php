<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.05.18
 * Time: 8:59
 */

function action() {
    return [
        'currentTime' => date('Y-m-d H:i:s'),
        'currentTimeZone' => date('T'),
        'fromGreenwich' => date('P'),
        'view' => 'time.php',
    ];
}