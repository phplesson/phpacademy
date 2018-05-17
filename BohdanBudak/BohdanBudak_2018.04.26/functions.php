<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.05.18
 * Time: 7:44
 */

function detectWebInput() {
    if (!empty($_GET['action'])) {
        $action = (int)$_GET['action'];
    } else {
        $action = '0';
    }
    
    $data = include('0.php');
    
    if (!array_key_exists($action, $data['actionList'])) {
        $action = 0;
    }
    
    return [$action, ($_SERVER['REQUEST_METHOD'] == 'POST')? $_POST : null];
}