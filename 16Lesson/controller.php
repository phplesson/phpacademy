<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 07.07.2018
 * Time: 13:58
 */

//$argv
$argv = [
    'temp',
    'home',
    'aaa',
    'bbb'
];

include_once 'model.php';


if (isset($argv[1]) && $argv[1] == 'login') {

    if (isset($argv[2]) && isset($argv[3])) {
        $login = login($argv[2], $argv[3]);

        if ($login === null) {
            echo 'redirect login' . PHP_EOL;
        } else {
            echo 'redirect home' . PHP_EOL;
        }
    } else {
        include 'login.php';
    }

} elseif (isset($argv[1]) && $argv[1] == 'home') {
    $userId = getCurrentUser();

    if ($userId === null) {
        echo 'redirect login' . PHP_EOL;
    } else {
        $info  = getHome($userId);
        include 'home.php';
    }
} else {
    echo 'error 404' . PHP_EOL;
}