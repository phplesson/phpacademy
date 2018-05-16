<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.05.18
 * Time: 8:56
 */
error_reporting(0xffffffff);


$viewData = [];

if (empty($_GET['action'])) {
    $action = 'main';
} else {
    $action = $_GET['action'];
}


$libFileName = 'lib/' . 'action' . ucfirst($action) . '.php';

if (!is_readable($libFileName)) {
    //bad action
    $action = 'error';
    $libFileName = 'lib/actionError.php';
}



$viewData['title'] = $action;

include $libFileName;

$args = $_GET;
unset($args['action']);

$viewData['content'] = action($args);

include('templates/index.php');
