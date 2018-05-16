<?php

$f1 = fopen('1.txt', 'r');

$result = unlink('1.txt');

fclose($f1);

var_dump(__DIR__);
var_dump(getcwd());



$f1 = function() {
  echo 'type1' . PHP_EOL;
};


$f2 = function() {
  echo 'type2' . PHP_EOL;
};

function ff() {return true;}

$f1();
$f1();
$f2();
ff();
$array = [
  'f1' => function() {
    echo 'type2' . PHP_EOL;
  },

  'f2' => $f2,
];