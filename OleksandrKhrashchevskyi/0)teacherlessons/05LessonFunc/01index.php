<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 03.05.2018
 * Time: 18:32
 */
session_start();

$result = [];
$result['GET'] = $_GET;
$result['POST'] = $_POST;
$result['COOKIE'] = $_COOKIE;

echo "<pre>";
var_dump($result);
echo "<pre>";
