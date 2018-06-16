<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 16.06.2018
 * Time: 12:44
 */

$obj;

/* @var $obj \MyHtml\Human|\MyHtml\Tag */

$obj = new \MyHtml\Human();
$obj->setName('vasya');
$obj->setAge(21);

echo $obj . PHP_EOL;

$obj->