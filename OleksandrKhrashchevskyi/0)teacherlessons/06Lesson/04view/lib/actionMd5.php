<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.05.18
 * Time: 9:26
 */

function action(array $args) {
    if (empty($args['text'])) {
        $text = 'text is missed';
    } {
        $text = $args['text'];
    }
    
    $md5 = md5($text);
    
    return [
        'message' => "md5('$text') = $md5",
        'view' => 'message.php',
    ];
}