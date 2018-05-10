<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.05.18
 * Time: 9:25
 */

function writeArray(array $data) {
    echo '<ul>';
    foreach($data as $key => $value) {
        echo '<li>';

        echo "<span>$key</span>=<span>$value</span>";

        echo '</li>';
    }
    echo '</ul>';
}

echo '<h1>recursion</h1>';

if (is_readable('.temp')) {
    $data = unserialize(file_get_contents('.temp'));
} else {
    $data = [];
}

writeArray($data);