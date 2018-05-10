<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.05.18
 * Time: 1:03
 */

define('DOCUMENT_ROOT', __DIR__ . DIRECTORY_SEPARATOR);
include('./autoload.php');

$link = makeUrl();
echo $link;