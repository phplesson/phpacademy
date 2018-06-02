<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.05.18
 * Time: 9:04
 */

if (count($_GET) > 0) {
    $str = serialize($_GET);
    file_put_contents('.temp', $str);

    chmod('.temp', 0777);

    echo 'done';
} elseif (is_readable('.temp')) {
    $str = file_get_contents('.temp');
    $data = unserialize($str);
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}