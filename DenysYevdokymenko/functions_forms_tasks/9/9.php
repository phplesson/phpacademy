<?php
/**
 * Created by PhpStorm.
 * User: fiksa
 * Date: 04.05.2018
 * Time: 14:49
 */
//include 'form.html';
$text = $_POST['text'];
function reversText($a)
{
    echo strrev($a);
}
//var_dump($_POST);

reversText($text);
