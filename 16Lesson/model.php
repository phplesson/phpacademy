<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 07.07.2018
 * Time: 13:58
 */

function login($user, $pass) {
    return ($user === $pass)? mt_rand(1,1000) : false;
}

function getHome($userId) {
    return "home data of $userId";
}

function getCurrentUser() {
    $r = mt_rand(1,100);
    return ($r > 50)? $r : null;
}