<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 15.04.18
 * Time: 23:23
 *
 *  3 - у нас есть пол литра алкоголя - А градусов, мы его разбавляем кокаколой
 *    в отношении 1 к 1, сколько можно докинуть кубиков льда(один кубик 1 гр льда)
 *    чтобы даже если он целиком растает, крепость не стала ниже Б градусов
 *
 *    тоже надо учесть, что уже после разбавления колой, крепость может получиться ниже Б
 *    или равной Б
 */

define('ALCOHOL', 500); // amount of alco
$options = getopt('a:b:');

$a = $options['a']; // alco grad without cocacola
$b = $options['b']; // limit of alcohol grad

$alcoCola = ALCOHOL * 2; //amount alco whith cola
$alcoColaGrad = $a/2; // alco grad with cola


if($alcoColaGrad <= $b){
    $amountOfIce = "We cant use any ice!";
} else {
    $amountOfIce = round(($alcoColaGrad/$b)*$alcoCola - $alcoCola);
}

echo $amountOfIce . PHP_EOL;


